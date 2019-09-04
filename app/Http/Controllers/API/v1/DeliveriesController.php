<?php

namespace App\Http\Controllers\API\v1;

use App\Delivery;
use App\Transformer\DeliveriesTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;

class DeliveriesController extends Controller
{
    /**
     * @var Manager
     */
    private $fractal;

    /**
     * @var DeliveriesTransformer
     */
    private $deliveriesTransformer;

    function __construct(Manager $fractal, DeliveriesTransformer $deliveriesTransformer)
    {
        $this->fractal = $fractal;
        $this->deliveriesTransformer = $deliveriesTransformer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $deliveries = Delivery::all();

        $deliveries = new Collection($deliveries, $this->deliveriesTransformer); // Create a resource collection transformer
        $deliveries = $this->fractal->createData($deliveries); // Transform data

        return response()->json($deliveries->toArray());
    }
}
