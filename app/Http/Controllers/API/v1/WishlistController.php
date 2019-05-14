<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Transformer\UserWishlistTransformer;
use App\Wishlist;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;

class WishlistController extends Controller
{
    /**
     * @var Manager
     */
    private $fractal;

    /**
     * @var ProductsTransformer
     */
    private $userWishlistTransformer;

    function __construct(Manager $fractal, UserWishlistTransformer $userWishlistTransformer)
    {
        $this->fractal = $fractal;
        $this->userWishlistTransformer = $userWishlistTransformer;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $wishlists = Wishlist::where("user_id", "=", $id)->with('product')->orderby('id', 'desc')->get();

        $wishlists = new Collection($wishlists, $this->userWishlistTransformer); // Create a resource collection transformer
        $this->fractal->parseIncludes('products'); // parse includes
        $wishlists = $this->fractal->createData($wishlists); // Transform data

        return response()->json($wishlists->toArray());
    }
}
