<?php

namespace App\Http\Controllers;


use App\BlogCategory;
use App\BlogPost;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::where('status', 'like', 'PUBLISHED')->paginate(2);
        $blogCategories = BlogCategory::where('status', 'like', 'PUBLISHED')->inRandomOrder()->get();

        return view('shop.blog.main')->with([
            'posts' => $posts,
            'blogCategories' => $blogCategories,
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
        $post = BlogPost::where('status', 'like', 'PUBLISHED')->where('slug',$slug)->firstOrFail();

        return view('shop.blog.details')->with([
            'post' => $post
        ]);
    }
}
