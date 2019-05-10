<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Product;
use App\Transformer\ProductsTransformer;
use League\Fractal\Resource\Collection;
use League\Fractal\Manager;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class ShopController extends Controller
{
    /**
     * @var Manager
     */
    private $fractal;

    /**
     * @var ProductsTransformer
     */
    private $productsTransformer;

    function __construct(Manager $fractal, ProductsTransformer $productsTransformer)
    {
        $this->fractal = $fractal;
        $this->productsTransformer = $productsTransformer;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination = 8;

        $paginator = Product::paginate($pagination);
        $products = $paginator->getCollection();

        $resource = new Collection($products, $this->productsTransformer); // Create a resource collection transformer
        $resource->setPaginator(new IlluminatePaginatorAdapter($paginator));
        $products = $this->fractal->createData($resource); // Transform data

        return response()->json($products->toArray());
    }
}
