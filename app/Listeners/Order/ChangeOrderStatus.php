<?php

namespace App\Listeners\Order;

use App\Events\Order\AdminOrderStatus;
use App\Mail\Order\OrderStatus;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class ChangeOrderStatus implements ShouldQueue
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
     * @param  \App\Events\Order\AdminOrderStatus  $event
     * @return void
     */
    public function handle(AdminOrderStatus $event)
    {
        Mail::to($event->order->billing_email)->send(new OrderStatus($event->order,$event->status));
    }
}
