<?php

namespace App\Http\Controllers;

use App\Brand;
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
        $categories = CategoryJewel::where('status', 'like', 'PUBLISHED')->where('parent_id',NULL)->take(10)->inRandomOrder()->get();
        $products = Product::where('status', 'like', 'PUBLISHED')->take(8)->inRandomOrder()->get();
        $bestProducts = Product::where('status', 'like', 'PUBLISHED')->where('bestof',true)->take(5)->inRandomOrder()->get();
        $latestProducts = Product::where('status', 'like', 'PUBLISHED')->orderBy('id', 'desc')->take(8)->get();
        $brands = Brand::where('status', 'like', 'PUBLISHED')->take(8)->inRandomOrder()->get();

        return view('shop.home.main')->with([
            'products' => $products,
            'bestProducts' => $bestProducts,
            'categories' => $categories,
            'latestProducts' => $latestProducts,
            'brands' => $brands
        ]);
    }
}
