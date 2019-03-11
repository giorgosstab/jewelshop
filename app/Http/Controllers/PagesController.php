<?php

namespace App\Http\Controllers;

use App\CustomPage;
use App\Product;

class PagesController extends Controller
{
    public function getPage($slug = null)
    {
        $page = CustomPage::where('slug', $slug)->where('status', 'active');
        $page = $page->firstOrFail();

        if($page->layout == CustomPage::LAYOUT_CONTAINER_DEFAULT){
            $specialOffers = Product::where('status', 'like', 'PUBLISHED')->where('offer', true)->inRandomOrder()->take(4)->get();
            $hotDeals = Product::where('status', 'like', 'PUBLISHED')->where('hotdeals', true)->inRandomOrder()->take(2)->get();

            return view('shop.pages.default')->with([
                'page' => $page,
                'specialOffers' => $specialOffers,
                'hotDeals' => $hotDeals,
            ]);
        } else {
            $specialOffers = Product::where('status', 'like', 'PUBLISHED')->where('offer', true)->inRandomOrder()->take(4)->get();
            $hotDeals = Product::where('status', 'like', 'PUBLISHED')->where('hotdeals', true)->inRandomOrder()->take(2)->get();
            if($page->column_right_left == CustomPage::COLUMN_RIGHT ||$page->column_right_left == CustomPage::COLUMN_LEFT ){
                return view('shop.pages.fluid')->with([
                    'page' => $page,
                    'specialOffers' => $specialOffers,
                    'hotDeals' => $hotDeals,
                ]);
            } else {
                return view('shop.pages.fluid')->with([
                    'page' => $page,
                ]);
            }
        }
    }
}
