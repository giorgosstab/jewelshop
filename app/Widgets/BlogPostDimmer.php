<?php

namespace App\Widgets;

use App\BlogPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class BlogPostDimmer extends BaseDimmer
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
        $count = BlogPost::count();
        $string = trans_choice('Blog Posts', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => 'You have '. $count .' ' .Str::lower($string) . ' in your database. Click on button below to view all blog posts.',
            'button' => [
                'text' => 'View all Blog Posts',
                'link' => route('voyager.blog_posts.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/blog.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(BlogPost::class));
    }
}
