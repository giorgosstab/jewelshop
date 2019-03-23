<?php

namespace App\Events\Order;

use App\Order;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class AdminOrderStatus
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order;
    public $status;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Order $order, $status)
    {
        $this->order = $order;
        $this->status = $status;
    }

}
