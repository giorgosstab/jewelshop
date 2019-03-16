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
        $pagination = 2;
        $posts = BlogPost::where('status', 'like', 'PUBLISHED');
        $blogCategories = BlogCategory::where('status', 'like', 'PUBLISHED')->inRandomOrder()->get();

        if(request()->sort == "new") {
            $posts = $posts->orderBy('id', 'desc')->paginate($pagination);
        } else if(request()->sort == "old") {
            $posts = $posts->orderBy('id')->paginate($pagination);
        } else {
            $posts = $posts->paginate($pagination);
        }

        return view('shop.blog.main')->with([
            'posts' => $posts,
            'blogCategories' => $blogCategories
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
        $blogCategories = BlogCategory::where('status', 'like', 'PUBLISHED')->inRandomOrder()->get();

        return view('shop.blog.details')->with([
            'post' => $post,
            'blogCategories' => $blogCategories
        ]);
    }
}
