<?php

namespace App\Http\Controllers;


use App\BlogCategory;
use App\BlogPost;
use App\Comment;
use App\Tag;
use function foo\func;

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
        $tags = Tag::where('status', 'like', 'PUBLISHED')->inRandomOrder()->get();
        $popularPosts = BlogPost::popularDay()->where(function($query) {
            return $query->where('status', 'like', 'PUBLISHED')->groupBy('visits_count');
        })->take(3)->get();

        if(request()->sort == "new") {
            $posts = $posts->orderBy('id', 'desc')->paginate($pagination);
        } else if(request()->sort == "old") {
            $posts = $posts->orderBy('id')->paginate($pagination);
        } else {
            $posts = $posts->orderBy('id', 'desc')->paginate($pagination);
        }

        if(request()->category) {
            $posts = BlogPost::where('status', 'like', 'PUBLISHED')->with('category')->whereHas('category', function ($query) {
                $query->where('status', 'like', 'PUBLISHED')->whereIn('slug',explode(' ', request()->category));
            });
            if(request()->sort == "new") {
                $posts = $posts->orderBy('id', 'desc')->paginate($pagination);
            } else if(request()->sort == "old") {
                $posts = $posts->orderBy('id')->paginate($pagination);
            } else {
                $posts = $posts->orderBy('id', 'desc')->paginate($pagination);
            }
        }

        if(request()->tag) {
            $posts = BlogPost::where('status', 'like', 'PUBLISHED')->with('tags')->whereHas('tags', function ($query) {
                $query->where('status', 'like', 'PUBLISHED')->whereIn('slug',explode(' ', request()->tag));
            });
            if(request()->sort == "new") {
                $posts = $posts->orderBy('id', 'desc')->paginate($pagination);
            } else if(request()->sort == "old") {
                $posts = $posts->orderBy('id')->paginate($pagination);
            } else {
                $posts = $posts->orderBy('id', 'desc')->paginate($pagination);
            }
        }

        return view('shop.blog.main')->with([
            'posts' => $posts,
            'blogCategories' => $blogCategories,
            'tags' => $tags,
            'popularPosts' => $popularPosts
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
        $post = BlogPost::where('status', 'like', 'PUBLISHED')->where('slug', $slug)->with('tags','comments')->whereHas('tags', function ($query) {
            $query->where('status', 'like', 'PUBLISHED');
        })->firstOrFail();

        $popularPosts = BlogPost::popularDay()->where('slug','<>',$slug)->where(function($query) {
            return $query->where('status', 'like', 'PUBLISHED')->groupBy('visits_count');
        })->take(3)->get();

        // add in visit table for popular post
        $post->visit();

        $blogCategories = BlogCategory::where('status', 'like', 'PUBLISHED')->inRandomOrder()->get();
        $tags = Tag::where('status', 'like', 'PUBLISHED')->inRandomOrder()->get();

        return view('shop.blog.details')->with([
            'post' => $post,
            'blogCategories' => $blogCategories,
            'tags' => $tags,
            'popularPosts' => $popularPosts
        ]);
    }
}
