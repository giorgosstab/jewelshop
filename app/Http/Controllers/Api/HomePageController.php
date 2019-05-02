<?php

namespace App\Http\Controllers\Api;

use App\BlogPost;
use App\CategoryJewel;
use App\Product;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function popularProducts()
    {
        $products = Product::popularDay()->where(function($query) {
            return $query->where('status', 'like', 'PUBLISHED')->groupBy('visits_count');
        })->take(8)->get();
        return response()->json($products);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function popularBlogPosts()
    {
        $posts = BlogPost::popularDay()->where(function($query) {
            return $query->where('status', 'like', 'PUBLISHED')->groupBy('visits_count');
        })->take(3)->get();
        return response()->json($posts);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function parentCategories()
    {
        $categories = CategoryJewel::where('parent_id',null)->where('status', 'like', 'PUBLISHED')->get();
        return response()->json($categories);
    }
}
