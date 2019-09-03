<?php

namespace App\Http\Controllers\API\v1;

use App\User;
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
        $this->validate($request, [
            'products' => 'required',
            'stripeToken' => 'required'
        ]);

        $content = $request->products->map(function($item){
            return 'Product Name: '.$item->slug.', Quantity: '.$item->qty;
        })->values()->toJson();

        $user = User::find($request->user_id);

        try {
            $charge = Stripe::charges()->create([
                'amount' => $request->total,
                'currency' => 'EUR',
                'source' => $request->stripeToken,
                'description' => 'Mobile Order',
                'receipt_email' => $user->email,
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
