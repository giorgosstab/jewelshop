<?php

namespace App\Http\Controllers;

use App\Delivery;
use App\Events\Order\UserOrderPlace;
use App\Http\Requests\CheckoutRequest;
use App\Order;
use App\OrderProduct;
use App\Payment;
use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;
use function sha1;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = Delivery::all();
        $payments = Payment::all();

        if(Cart::instance('default')->count() == 0) {
            return redirect()->route('shop.products.index');
        }

        return view('shop.checkout.main')->with([
            'discount' => getNumbers()->get('discount'),
            'newSubTotal' => getNumbers()->get('newSubTotal'),
            'newTax' => getNumbers()->get('newTax'),
            'newTotal' => getNumbers()->get('newTotal'),
            'deliveries' => $deliveries,
            'payments' => $payments,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guest()
    {
        $deliveries = Delivery::all();
        $payments = Payment::all();

        if(Cart::instance('default')->count() == 0) {
            return redirect()->route('shop.products.index');
        }

        if(auth()->user() && request()->is('checkout-guest')) {
            return redirect()->route('shop.checkout.index');
        }

        return view('shop.checkout.main')->with([
            'discount' => getNumbers()->get('discount'),
            'newSubTotal' => getNumbers()->get('newSubTotal'),
            'newTax' => getNumbers()->get('newTax'),
            'newTotal' => getNumbers()->get('newTotal'),
            'deliveries' => $deliveries,
            'payments' => $payments,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\CheckoutRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        $content = Cart::content()->map(function($item){
            return 'Product Name: '.$item->model->slug.', Quantity: '.$item->qty;
        })->values()->toJson();
        $discount = [
            'Name' => session()->get('coupon')['name'],
            'Discount' =>  number_format(session()->get('coupon')['discount'] / 100,2,'.',',')
        ];
        try {
            $charge = Stripe::charges()->create([
                'amount' => getNumbers()->get('newTotal') / 100,
                'currency' => 'EUR',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $content,
                    'discount' => collect($discount)->toJson(),
                    'quantity' => Cart::instance('default')->count(),
                ],
            ]);

            $this->addToOrdersTables($request, null);

            //SUCCESSFUL
            Cart::instance('default')->destroy();
            session()->forget('coupon');

            return redirect()->route('shop.checkout.confirm')->with('success_message','Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            $this->addToOrdersTables($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }

    protected function addToOrdersTables($request, $error){
        $random_id = str::random(60);
        $random_id .= microtime();
        $hash_id = sha1($random_id);

        //INSERT INTO ORDERS TABLE
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'unique_id' => $hash_id,

            'billing_fname' => $request->fname,
            'billing_lname' => $request->lname,
            'billing_address' => $request->address,
            'billing_housenumber' => $request->hnumber,
            'billing_locality' => $request->locality,
            'billing_email' => $request->email,
            'billing_city' => $request->city,
            'billing_phone' => $request->phone,
            'billing_country' => $request->country,
            'billing_postalcode' => $request->zip_code,

            'different_shipping_address' => !empty($request->dif_shipping) ? true : false,

            'second_billing_fname' => !empty($request->fname_sec) ? $request->fname_sec : null,
            'second_billing_lname' => !empty($request->lname_sec) ? $request->lname_sec : null,
            'second_billing_address' => !empty($request->lname_sec) ? $request->lname_sec : null,
            'second_billing_housenumber' => !empty($request->hnumber_sec) ? $request->hnumber_sec : null,
            'second_billing_locality' => !empty($request->locality_sec) ? $request->locality_sec : null,
            'second_billing_email' => !empty($request->email_sec) ? $request->email_sec : null,
            'second_billing_city' => !empty($request->city_sec) ? $request->city_sec : null,
            'second_billing_phone' => !empty($request->phone_sec) ? $request->phone_sec : null,
            'second_billing_country' => !empty($request->country_sec) ? $request->country_sec : null,
            'second_billing_postalcode' => !empty($request->zipcode_sec) ? $request->zipcode_sec : null,

            'billing_discount' => getNumbers()->get('discount'),
            'billing_discount_code' => getNumbers()->get('code'),

            'billing_subtotal' => getNumbers()->get('newSubTotal'),
            'billing_tax' => getNumbers()->get('newTax'),
            'billing_total' => getNumbers()->get('newTotal'),

            'delivery_gateway' => $request->delivery,
            'payment_gateway' => $request->card,
            'name_on_card' => !empty($request->holder_name) ? $request->holder_name : null,

            'error' => $error
        ]);

        //INSERT INTO ORDER_PRODUCT TABLE
        foreach(Cart::content() as $item){
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty
            ]);
        }

        event(new UserOrderPlace($order));

    }
}
