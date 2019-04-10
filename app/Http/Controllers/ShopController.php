<?php

namespace App\Http\Controllers;

use App\Brand;
use App\CategoryJewel;
use App\Product;
use App\Rating;
use App\User;
use Illuminate\Support\Facades\Auth;
use function request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialOffers = Product::where('status', 'like', 'PUBLISHED')->where('offer', true)->inRandomOrder()->get();
        $hotDeals = Product::where('status', 'like', 'PUBLISHED')->where('hotdeals', true)->inRandomOrder()->get();
        $allBrands = Brand::where('status', 'like', 'PUBLISHED')->orderBy('name','ASC')->with('products')->whereHas('products', function ($query) {
            $query->where('status', 'like', 'PUBLISHED');
        })->get();

        $allCategories = CategoryJewel::where('status', 'like', 'PUBLISHED')->orderBy('name','ASC')->with('products')->whereHas('products', function ($query) {
            $query->where('status', 'like', 'PUBLISHED');
        })->get();


        /******************************
         *
         * reverse by category products
         *
         ******************************/
        /*$categories = CategoryJewel::find(1)->children()->with('products')->whereHas('products',function ($query){
            $query->where('status', 'like', 'PUBLISHED');
        })->get();
        $products = collect([]);
        foreach ($categories as $category){
            foreach ($category->products as $product) {
                $products->push($product);
            }
        }*/



        if (request()->category) {

            // show product by category
            $category = CategoryJewel::where('slug',request()->category)->firstOrFail();
            $id = $category->id;
            $products = Product::with('categoriesJewels')->whereHas('categoriesJewels', function($query) use($id) {
                $query->where('parent_id', $id);
            });

            $maxPrice = $products->max('price');
            $minPrice = $products->min('price');
            $productsPagination = $products->count();

//        } elseif(request()->sub) {
//            $products = Product::with('categoriesJewels')->whereHas('categoriesJewels', function ($query) {
//                $query->where('status', 'like', 'PUBLISHED')->where('slug', request()->sub);
//            });
//            $maxPrice = $products->max('price');
//            $minPrice = $products->min('price');
//            $productsPagination = $products->count();
        } else {
            $products = Product::where('status', 'like', 'PUBLISHED')->take(16);
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

            //add request brands to popular by visit slug
            $popularBrands = Brand::where(function($query) {
                $query->whereIn('slug',explode(' ', request()->brands));
            })->get();
            foreach ($popularBrands as $popularBrand) {
                $popularBrand->visit();
            }
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

            //add request brands to popular by visit slug
            $popularBrands = Brand::where(function($query) {
                $query->whereIn('slug',explode(' ', request()->brands));
            })->get();
            foreach ($popularBrands as $popularBrand) {
                $popularBrand->visit();
            }
        }

        if(request()->sort == "low_high"){
            $products = $products->orderBy('price')->paginate(Product::PAGINATION);
        } else if(request()->sort == "high_low") {
            $products = $products->orderBy('price', 'desc')->paginate(Product::PAGINATION);
        } else if(request()->sort == "new") {
            $products = $products->orderBy('id', 'desc')->paginate(Product::PAGINATION);
        } else if(request()->sort == "a_z") {
            $products = $products->orderBy('name')->paginate(Product::PAGINATION);
        } else if(request()->sort == "z_a") {
            $products = $products->orderBy('name', 'desc')->paginate(Product::PAGINATION);
        } else {
            $products = $products->orderBy('id', 'desc')->paginate(Product::PAGINATION); //->onEachSide($onside)
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
        $mightAlsoLike = Product::where('status', 'like', 'PUBLISHED')->where('slug','!=',$slug)->inRandomOrder()->take(20)->get();

        if(Auth::user()){
            $user = Auth::user()->id;
        } else {
            $user = 0;
        }
        $rate = Rating::where('user_id',$user)->where('product_id',$product->id)->first();

        //appear badge for quantity of product
        $stockLevel = getStockLevel($product->quantity);

        // add in visit table for products
        $product->visit();

        return view('shop.products.details')->with([
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike,
            'stockLevel' => $stockLevel,
            'rate' => $rate,
        ]);
    }
}
