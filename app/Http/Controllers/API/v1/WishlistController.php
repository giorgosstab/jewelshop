<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Transformer\UserWishlistTransformer;
use App\User;
use App\Wishlist;
use League\Fractal\Manager;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
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
        $pagination = 5;

        $paginator = Wishlist::where("user_id", "=", $id)->with('product')->orderby('id', 'desc')->paginate($pagination);
        $wishlists = $paginator->getCollection();

        $resource = new Collection($wishlists, $this->userWishlistTransformer); // Create a resource collection transformer
        $resource->setPaginator(new IlluminatePaginatorAdapter($paginator));
        $this->fractal->parseIncludes('products'); // parse includes
        $wishlists = $this->fractal->createData($resource); // Transform data

        return response()->json($wishlists->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $user_id
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id,$id)
    {
        $user = User::find($user_id);
        $wishlist = Wishlist::where('user_id',$user->id)->find($id);
        if($wishlist){
            $wishlist->delete();
            if(!$wishlist){
                return response()->json(['message' => 'Something Went Wrong','status_code' => 404]);
            }
            return response()->json(['message' => 'Successfully Delete Items','status_code' => 200]);
        } else {
            return response()->json(['message' => 'You must Delete only your wish list items','status_code' => 404]);
        }
    }
}
