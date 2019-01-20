<?php

namespace App\Listeners\Order;
use App\Events\Order\UserOrderPlace;
use App\Mail\Order\OrderPlaced;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendOrderPlace
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
    public function handle(UserOrderPlace $event)
    {
        Mail::to($event->order->billing_email)->send(new OrderPlaced($event->order));
    }
}
