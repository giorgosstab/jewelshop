<?php

namespace App\Http\Controllers;

use App\Brand;
use App\CategoryJewel;
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

        $specialOffers = Product::where('status', 'like', 'PUBLISHED')->where('offer', true)->inRandomOrder()->take(4)->get();
        $hotDeals = Product::where('status', 'like', 'PUBLISHED')->where('hotdeals', true)->inRandomOrder()->take(2)->get();
        $allBrands = Brand::where('status', 'like', 'PUBLISHED')->groupBy('name')->with('products')->whereHas('products', function ($query) {
            $query->where('status', 'like', 'PUBLISHED');
        })->get();

        $allCategories = CategoryJewel::where('status', 'like', 'PUBLISHED')->groupBy('name')->with('products')->whereHas('products', function ($query) {
            $query->where('status', 'like', 'PUBLISHED');
        })->get();


        if (request()->cat) {
            $products = Product::where('status', 'like', 'PUBLISHED')->inRandomOrder()->take(20)->get();
            $productsPagination = $products->count();

        } elseif(request()->sub) {
            $products = Product::with('categoriesJewels')->whereHas('categoriesJewels', function ($query) {
                $query->where('status', 'like', 'PUBLISHED')->where('slug', request()->sub);
            });
            $maxPrice = $products->max('price');
            $minPrice = $products->min('price');
            $productsPagination = $products->count();
        }else {
            $products = Product::where('status', 'like', 'PUBLISHED')->take(20);
            $maxPrice = $products->max('price');
            $minPrice = $products->min('price');
            $productsPagination = $products->count();
        }

        if(request()->filter == "range"){
            $products = $products->where('price', '>=', request()->min * 100)
                ->where('price', '<', request()->max * 100);
        }

        if(request()->brands && request()->brands != ""){
            $products = Product::where('status', 'like', 'PUBLISHED')->with('brand')->whereHas('brand', function ($query) {
                $query->where('status', 'like', 'PUBLISHED')->whereIn('slug',explode(' ', request()->brands));
            });
            $maxPrice = $products->max('price');
            $minPrice = $products->min('price');
        }
        if(request()->categories && request()->categories != ""){
            $products = Product::where('status', 'like', 'PUBLISHED')->with('categoriesJewels')->whereHas('categoriesJewels', function ($query) {
                $query->where('status', 'like', 'PUBLISHED')->whereIn('slug',explode(' ', request()->categories));
            });
            $maxPrice = $products->max('price');
            $minPrice = $products->min('price');
        }
        if(request()->brands && request()->brands != "" && request()->categories && request()->categories != ""){
            $products = Product::where('status', 'like', 'PUBLISHED')->with('categoriesJewels')->whereHas('categoriesJewels', function ($query) {
                $query->whereIn('slug',explode(' ', request()->categories));
            })->with('brand')->whereHas('brand', function ($query) {
                $query->whereIn('slug',explode(' ', request()->brands));
            });
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

        return view('shop.products.main')->with([
            'products' => $products,
            'productsPagination' => $productsPagination,
            'specialOffers' => $specialOffers,
            'hotDeals' => $hotDeals,
            'maxPrice' => $maxPrice,
            'minPrice' => $minPrice,
            'allBrands' => $allBrands,
            'allCategories' => $allCategories,
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
        $product = Product::where('status', 'like', 'PUBLISHED')->where('slug',$slug)->firstOrFail();
        $mightAlsoLike = Product::where('status', 'like', 'PUBLISHED')->where('slug','!=',$slug)->inRandomOrder()->take(4)->get();
        return view('shop.products.details')->with([
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }
}
