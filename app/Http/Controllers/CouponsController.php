<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Jobs\Coupon\UpdateCouponJob;
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
            return redirect()->route('shop.shopping-cart.index')->with('warning_message','Invalid coupon code. Please try again!');
        }

        dispatch_now(new UpdateCouponJob($coupon));

        return redirect()->route('shop.shopping-cart.index')->with('success_message', 'Coupon has been applied!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');

        return redirect()->route('shop.shopping-cart.index')->with('success_message', 'Coupon has been removed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroyCheckoutPage()
    {
        session()->forget('coupon');
        if(auth()->user()) {
            return redirect()->route('shop.checkout.index')->with('success_message', 'Coupon has been removed!');
        } else {
            return redirect()->route('shop.checkout.guest')->with('success_message', 'Coupon has been removed!');
        }

    }
}
