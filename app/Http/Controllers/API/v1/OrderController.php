<?php

namespace App\Http\Controllers\API\v1;

use App\Order;
use App\Transformer\UserOrdersTransformer;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Resource\Collection;

class OrderController extends Controller
{
    /**
     * @var Manager
     */
    private $fractal;

    /**
     * @var UserOrdersTransformer
     */
    private $userOrdersTransformer;

    function __construct(Manager $fractal, UserOrdersTransformer $userOrdersTransformer)
    {
        $this->fractal = $fractal;
        $this->userOrdersTransformer = $userOrdersTransformer;
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

        $paginator = Order::where("user_id", "=", $id)->paginate($pagination);
        $orders = $paginator->getCollection();

        $resource = new Collection($orders, $this->userOrdersTransformer); // Create a resource collection transformer
        $resource->setPaginator(new IlluminatePaginatorAdapter($paginator));
        $this->fractal->parseIncludes('products'); // parse includes
        $orders = $this->fractal->createData($resource); // Transform data

        return response()->json($orders->toArray());
    }
}
