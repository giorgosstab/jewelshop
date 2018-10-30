<?php

namespace App\Http\Controllers;

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
        //$products = Product::where('featured',true)->take(8)->inRandomOrder()->get();
        $products = Product::take(8)->inRandomOrder()->get();
        return view('shop.home.main')->with('products',$products);
    }
}
