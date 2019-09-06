<?php

namespace App\Http\Controllers\API\v1;

use App\Events\Order\UserOrderPlace;
use App\Order;
use App\OrderProduct;
use App\User;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use function sha1;

class CheckoutController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        if($request->payment === "Stripe") {
            $this->validate($request, [
                'products' => 'required',
                'stripeToken' => 'required'
            ]);
        } else {
            $this->validate($request, [
                'products' => 'required',
            ]);
        }

        $products = collect($request->products);
        $content = $products->map(function($item){
            return 'Product Name: '.$item["slug"].', Quantity: '.$item["quantity_item"];
        })->values()->toJson();

        $user = User::find($request->user_id);

        if($request->payment === "Stripe") {
            try {
                $charge = Stripe::charges()->create([
                    'amount' => $request->total / 100,
                    'currency' => 'EUR',
                    'source' => $request->stripeToken,
                    'description' => 'Mobile Order',
                    'receipt_email' => $user->email,
                    'metadata' => [
                        'contents' => $content,
                        'discount' => '',
                        //                    'discount' => collect($discount)->toJson(),
                        'quantity' => $products->count(),
                    ],
                ]);

                $this->addToOrdersTables($request, $products, null);

                //decrease quantity from all items in cart
                //            $this->decreaseQuantities();

                //SUCCESSFUL
                //            Cart::instance('default')->destroy();
                //            session()->forget('coupon');
                return response()->json(['message' => 'Thank you! Your payment has been successfully accepted!', 'status_code' => 200]);
            } catch (CardErrorException $e) {
                $this->addToOrdersTables($request, $products, $e->getMessage());
                return response()->json(['message' => $e->getMessage(), 'status_code' => 204]);
            }
        } else {
            $this->addToOrdersTables($request, $products, null);

            return response()->json(['message' => 'Thank you! Your payment has been successfully accepted!', 'status_code' => 200]);
        }
    }

    protected function addToOrdersTables($request, $products, $error){
        $random_id = str::random(60);
        $random_id .= microtime();
        $hash_id = sha1($random_id);

        //INSERT INTO ORDERS TABLE
        $order = Order::create([
            'user_id' => $request->user_id,
            'unique_id' => $hash_id,

            'billing_fname' => $request->addresses["fname"],
            'billing_lname' => $request->addresses["lname"],
            'billing_address' => $request->addresses["address"],
            'billing_housenumber' => $request->addresses["house_number"],
            'billing_locality' => $request->addresses["locality"],
            'billing_email' => $request->addresses["email"],
            'billing_city' => $request->addresses["city"],
            'billing_phone' => $request->addresses["phone"],
            'billing_country' => $request->addresses["country"],
            'billing_postalcode' => $request->addresses["postal_code"],

            'different_shipping_address' => false,

            'second_billing_fname' => !empty($request->addresses["second_fname"]) ? $request->addresses["second_fname"] : null,
            'second_billing_lname' => !empty($request->addresses["second_lnam"]) ? $request->addresses["second_lnam"] : null,
            'second_billing_address' => !empty($request->addresses["second_address"]) ? $request->addresses["second_address"] : null,
            'second_billing_housenumber' => !empty($request->addresses["second_house_number"]) ? $request->addresses["second_house_number"] : null,
            'second_billing_locality' => !empty($request->addresses["second_locality"]) ? $request->addresses["second_locality"] : null,
            'second_billing_email' => !empty($request->addresses["second_email"]) ? $request->addresses["second_email"] : null,
            'second_billing_city' => !empty($request->addresses["second_city"]) ? $request->addresses["second_city"] : null,
            'second_billing_phone' => !empty($request->addresses["second_phone"]) ? $request->addresses["second_phone"] : null,
            'second_billing_country' => !empty($request->addresses["second_country"]) ? $request->addresses["second_country"] : null,
            'second_billing_postalcode' => !empty($request->addresses["second_postal_code"]) ? $request->addresses["second_postal_code"] : null,

            'billing_discount' => 0,
            'billing_discount_code' => null,

            'billing_subtotal' => $request->subtotal,
            'billing_tax' => $request->tax,
            'billing_total' => $request->total,

            'delivery_gateway' => $request->delivery,
            'payment_gateway' => $request->payment,
//            'name_on_card' => !empty($request->holder_name) ? $request->holder_name : null,
            'name_on_card' => $request->addresses["email"],
            'instructions' => !empty($request->addresses["instructions"]) ? $request->addresses["instructions"] : null,

            'error' => $error
        ]);

        //INSERT INTO ORDER_PRODUCT TABLE
        foreach($products as $item){
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item["id"],
                'quantity' => $item["quantity_item"]
            ]);
        }

        event(new UserOrderPlace($order));
    }
}
