<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
//    protected $listen = [
//        Registered::class => [
//            SendEmailVerificationNotification::class,
//        ],
//    ];
    protected $listen = [
        'App\Events\Auth\UserActivationEmail' => [
            'App\Listeners\Auth\SendActivationEmail',
        ],
        'App\Events\Order\UserOrderPlace' => [
            'App\Listeners\Order\SendOrderPlace',
        ],
        'App\Events\Contact\ContactEvent' => [
            'App\Listeners\Contact\ContactListener',
        ],
        'App\Events\Order\AdminOrderStatus' => [
            'App\Listeners\Order\ChangeOrderStatus',
        ],
        'cart.added' => [
            'App\Listeners\Cart\CartUpdated',
        ],
        'cart.updated' => [
            'App\Listeners\Cart\CartUpdated',
        ],
        'cart.removed' => [
            'App\Listeners\Cart\CartUpdated',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
