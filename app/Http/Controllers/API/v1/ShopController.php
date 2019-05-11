<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Product;
use App\Transformer\ProductsTransformer;
use App\Transformer\ProductTransformer;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
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
    private $productsTransformer,$productTransformer;

    function __construct(Manager $fractal, ProductsTransformer $productsTransformer, ProductTransformer $productTransformer)
    {
        $this->fractal = $fractal;
        $this->productsTransformer = $productsTransformer;
        $this->productTransformer = $productTransformer;
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $product = new Item($product, $this->productTransformer); // Create a resource collection transformer
        $product = $this->fractal->createData($product); // Transform data
        return response()->json($product->toArray());
    }
}
