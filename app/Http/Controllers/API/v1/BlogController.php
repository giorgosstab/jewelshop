<?php

namespace App\Http\Controllers\API\v1;

use App\BlogPost;
use App\Http\Controllers\Controller;
use App\Transformer\BlogPostTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Item;

class BlogController extends Controller
{
    /**
     * @var Manager
     */
    private $fractal;

    /**
     * @var ProductsTransformer
     */
    private $blogPostTransformer;

    function __construct(Manager $fractal, BlogPostTransformer $blogPostTransformer)
    {
        $this->fractal = $fractal;
        $this->blogPostTransformer = $blogPostTransformer;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = BlogPost::find($id);
        $post = new Item($post, $this->blogPostTransformer); // Create a resource collection transformer
        $post = $this->fractal->createData($post); // Transform data
        return response()->json($post->toArray());
    }
}
