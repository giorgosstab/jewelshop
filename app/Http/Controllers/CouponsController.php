<?php

namespace App\Http\Controllers;

use App\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use function session;

class CouponsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if(!$coupon) {
            return redirect()->route('shop.checkout.index')->withErrors('Invalid coupon code. Please try again!');
        }

        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->discount(Cart::subtotal()),
        ]);
        if(auth()->user()) {
            return redirect()->route('shop.checkout.index')->with('success_message', 'Coupon has been applied!');
        } else {
            return redirect()->route('shop.checkout.guest')->with('success_message', 'Coupon has been applied!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');
        if(auth()->user()) {
            return redirect()->route('shop.checkout.index')->with('success_message', 'Coupon has been removed!');
        } else {
            return redirect()->route('shop.checkout.guest')->with('success_message', 'Coupon has been removed!');
        }

    }
}
