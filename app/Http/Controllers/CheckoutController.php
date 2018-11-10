<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.checkout.main');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        $content = Cart::content()->map(function($item){
            return $item->model->slug.', '.$item->qty;
        })->values()->toJson();
        try {
            $charge = Stripe::charges()->create([
                'amount' => Cart::total(),
                'currency' => 'EUR',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $content,
                    'quantity' => Cart::instance('default')->count(),
                ],
            ]);

            Cart::instance('default')->destroy();
            return redirect()->route('checkout.thankyou')->with('success_message','Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }
}
