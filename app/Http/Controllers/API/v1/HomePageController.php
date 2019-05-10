<?php

namespace App\Http\Controllers\API\v1;

use App\BlogPost;
use App\CategoryJewel;
use App\Product;
use App\Http\Controllers\Controller;
use App\Transformer\ParentCategoriesTransformer;
use App\Transformer\PopularBlogPostsTransformer;
use App\Transformer\PopularProductsTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;

class HomePageController extends Controller
{
    /**
     * @var Manager
     */
    private $fractal;

    /**
     * @var PopularProductsTransformer
     * @var PopularBlogPostsTransformer
     * @var ParentCategoriesTransformer
     */
    private $popularProductsTransformer,$popularBlogPostsTransformer,$parentCategoriesTransformer;

    function __construct(Manager $fractal, PopularProductsTransformer $popularProductsTransformer,PopularBlogPostsTransformer $popularBlogPostsTransformer, ParentCategoriesTransformer $parentCategoriesTransformer)
    {
        $this->fractal = $fractal;
        $this->popularProductsTransformer = $popularProductsTransformer;
        $this->popularBlogPostsTransformer = $popularBlogPostsTransformer;
        $this->parentCategoriesTransformer = $parentCategoriesTransformer;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::popularDay()->where(function($query) {
            return $query->where('status', 'like', 'PUBLISHED')->groupBy('visits_count');
        })->take(8)->get();
        $products = new Collection($products, $this->popularProductsTransformer); // Create a resource collection transformer
        $products = $this->fractal->createData($products); // Transform data

        $posts = BlogPost::popularDay()->where(function($query) {
            return $query->where('status', 'like', 'PUBLISHED')->groupBy('visits_count');
        })->take(3)->get();
        $posts = new Collection($posts, $this->popularBlogPostsTransformer); // Create a resource collection transformer
        $posts = $this->fractal->createData($posts); // Transform data

        $categories = CategoryJewel::where('parent_id',null)->where('status', 'like', 'PUBLISHED')->get();
        $categories = new Collection($categories, $this->parentCategoriesTransformer); // Create a resource collection transformer
        $categories = $this->fractal->createData($categories); // Transform data

        return response()->json([
            'products' =>[
                $products->toArray(),
            ],
            'posts' =>[
                $posts->toArray(),
            ],
            'categories' =>[
                $categories->toArray(),
            ],
        ]);

    }
}
