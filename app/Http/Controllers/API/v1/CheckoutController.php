<?php

namespace App\Http\Controllers\API\v1;

use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

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
        $content = $request->products->map(function($item){
            return 'Product Name: '.$item->slug.', Quantity: '.$item->qty;
        })->values()->toJson();

        try {
            $charge = Stripe::charges()->create([
                'amount' => getNumbers()->get('newTotal') / 100,
                'currency' => 'EUR',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $content,
                    'discount' => '',
//                    'discount' => collect($discount)->toJson(),
                    'quantity' => 5,
                ],
            ]);

//            $this->addToOrdersTables($request,null);

            //decrease quantity from all items in cart
//            $this->decreaseQuantities();

            //SUCCESSFUL
//            Cart::instance('default')->destroy();
//            session()->forget('coupon');
            return response()->json(['message' => 'success','status_code' => 200]);
//            return redirect()->route('shop.checkout.confirm')->with('success_message','Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
//            $this->addToOrdersTables($request, $e->getMessage());
            return response()->json(['message' => $e->getMessage(),'status_code' => 204]);
        }
    }
}
