<?php

namespace App\Widgets;

use App\CategoryJewel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class CategoryDimmer extends BaseDimmer
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
        $count = CategoryJewel::count();
        $string = trans_choice('Product Categories', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-archive',
            'title'  => "{$count} {$string}",
            'text'   => 'You have '. $count .' ' .Str::lower($string) . ' in your database. Click on button below to view all.',
            'button' => [
                'text' => 'View all Categories Jewels',
                'link' => route('voyager.category-jewels.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/category.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(CategoryJewel::class));
    }
}
