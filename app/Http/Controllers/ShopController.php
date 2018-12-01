<?php

namespace App\Http\Controllers;

use App\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination = 20;

        $specialOffers = Product::where('offer', true)->inRandomOrder()->take(4)->get();
        $hotDeals = Product::where('hotdeals', true)->inRandomOrder()->take(2)->get();

        if (request()->cat) {
            $products = Product::inRandomOrder()->take(20)->get();

        } elseif(request()->sub) {
            $products = Product::with('categoriesJewels')->whereHas('categoriesJewels', function ($query) {
                $query->where('slug', request()->sub);
            });
            //$categoryName = optional($allSubCategories->where('slug', request()->category)->first())->name;
        }else {
            $products = Product::take(20);
        }

        if(request()->sort == "low_high"){
            $products = $products->orderBy('price')->paginate($pagination);
        } else if(request()->sort == "high_low") {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } else if(request()->sort == "new") {
            $products = $products->orderBy('id', 'desc')->paginate($pagination);
        } else if(request()->sort == "a_z") {
            $products = $products->orderBy('name')->paginate($pagination);
        } else if(request()->sort == "z_a") {
            $products = $products->orderBy('name', 'desc')->paginate($pagination);
        } else {
            $products = $products->orderBy('id', 'desc')->paginate($pagination); //->onEachSide($onside)
        }

//        dd($products);
        return view('shop.products.main')->with([
            'products' => $products,
            'specialOffers' => $specialOffers,
            'hotDeals' => $hotDeals,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        $mightAlsoLike = Product::where('slug','!=',$slug)->inRandomOrder()->take(4)->get();
        return view('shop.products.details')->with([
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }
}
