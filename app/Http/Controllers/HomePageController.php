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
        $subcategories=new CategoryJewel;

        try {

            $allSubCategories=$subcategories->getCategories();

        } catch (Exception $e) {

            //no parent category found
        }
        $products = Product::take(8)->inRandomOrder()->get();
        $bestproducts = Product::where('bestof',true)->take(5)->inRandomOrder()->get();

        return view('shop.home.main')->with([
            'products' => $products,
            'bestproducts' => $bestproducts,
            'allSubCategories' => $allSubCategories,
        ]);
    }
}
