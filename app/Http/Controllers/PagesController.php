<?php

namespace App\Http\Controllers;

use App\CustomPage;
use App\Product;

class PagesController extends Controller
{
    public function index()
    {
        $page = CustomPage::where('slug', '/')->where('active', 1)->first();
        return view('page')->with('page', $page);
    }

    public function getPage($slug = null)
    {
        $specialOffers = Product::where('status', 'like', 'PUBLISHED')->where('offer', true)->inRandomOrder()->take(4)->get();
        $hotDeals = Product::where('status', 'like', 'PUBLISHED')->where('hotdeals', true)->inRandomOrder()->take(2)->get();

        $page = CustomPage::where('slug', $slug)->where('status', 'active');
        $page = $page->firstOrFail();

        // return view($page->template)->with('page', $page);
        return view('shop.pages.main')->with([
            'page' => $page,
            'specialOffers' => $specialOffers,
            'hotDeals' => $hotDeals,
        ]);
    }
}
