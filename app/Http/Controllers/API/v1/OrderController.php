<?php

namespace App\Http\Controllers\API\v1;

use App\Order;
use App\Transformer\UserOrdersTransformer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use League\Fractal\Manager;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

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
     * @return Response
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

    /**
     * Display the specified resource.
     *
     * @param  int  $user_id, $order_id
     * @return Response
     */
    public function show($user_id, $order_id)
    {
        $order = Order::where("user_id",$user_id)->where('id',$order_id)->firstOrFail();
        $order = new Item($order, $this->userOrdersTransformer); // Create a resource collection transformer
        $order = $this->fractal->createData($order); // Transform data
        return response()->json($order->toArray());
    }
}
