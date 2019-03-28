<?php

namespace App\Widgets;

use App\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class TagDimmer extends BaseDimmer
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
        $count = Tag::count();
        $string = trans_choice('Tags', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'fa fa-tags',
            'title'  => "{$count} {$string}",
            'text'   => 'You have '. $count .' ' .Str::lower($string) . ' in your database. Click on button below to view all tags.',
            'button' => [
                'text' => 'View all Tags',
                'link' => route('voyager.tags.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/tag.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Tag::class));
    }
}
