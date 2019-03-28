<?php

namespace App\Widgets;

use App\Brand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class BrandDimmer extends BaseDimmer
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
        $count = Brand::count();
        $string = trans_choice('Brands', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-archive',
            'title'  => "{$count} {$string}",
            'text'   => 'You have '. $count .' ' .Str::lower($string) . ' in your database. Click on button below to view all brands.',
            'button' => [
                'text' => 'View all Brands',
                'link' => route('voyager.brands.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/brand.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Brand::class));
    }
}
