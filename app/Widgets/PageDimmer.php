<?php

namespace App\Widgets;

use App\CustomPage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class PageDimmer extends BaseDimmer
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
        $count = CustomPage::count();
        $string = trans_choice('Custom Pages', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-documentation',
            'title'  => "{$count} {$string}",
            'text'   => 'You have '. $count .' ' .Str::lower($string) . ' in your database. Click on button below to view all pages.',
            'button' => [
                'text' => 'View all Custom Pages',
                'link' => route('voyager.custom_pages.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/page.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(CustomPage::class));
    }
}
