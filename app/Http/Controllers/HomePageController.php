<?php

namespace App\Http\Controllers;

use App\CategoryJewel;
use App\Product;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryJewel::where('parent_id',NULL)->take(10)->inRandomOrder()->get();
        $products = Product::take(8)->inRandomOrder()->get();
        $bestProducts = Product::where('bestof',true)->take(5)->inRandomOrder()->get();
        $latestProducts = Product::orderBy('id', 'desc')->take(8)->get();

        return view('shop.home.main')->with([
            'products' => $products,
            'bestProducts' => $bestProducts,
            'categories' => $categories,
            'latestProducts' => $latestProducts
        ]);
    }
}
