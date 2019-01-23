<?php

namespace App\Listeners\Cart;

use App\Coupon;
use App\Jobs\Coupon\UpdateCouponJob;
use function dispatch_now;

class CartUpdated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $couponName = session()->get('coupon')['name'];
        if($couponName){
            $coupon = Coupon::where('code', $couponName)->first();

            dispatch_now(new UpdateCouponJob($coupon));
        }
    }
}
