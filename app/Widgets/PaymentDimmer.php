<?php

namespace App\Widgets;

use App\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class PaymentDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Payment::count();
        $string = trans_choice('Payments', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-paypal',
            'title'  => "{$count} {$string}",
            'text'   => 'You have '. $count .' ' .Str::lower($string) . ' in your database. Click on button below to view all payment methods.',
            'button' => [
                'text' => 'View all Payments',
                'link' => route('voyager.payments.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/payment.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Payment::class));
    }
}
