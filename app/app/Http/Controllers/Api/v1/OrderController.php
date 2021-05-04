<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\v1\OrderRequest;
use App\Models\Order;
use App\Services\Api\v1\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $orderService = null;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    /** @OA\Info(title="Sistema de vendas", version="0.1") */

    /**
     * @OA\Get(
     *     path="/order/{orderId}",
     *     tags={"order"},
     *     summary="Finds Order by id",
     *     description="Orders will have their products, purchase date and total price",
     *     @OA\Parameter(
     *         name="order",
     *         in="query",
     *         description="Id of the order",
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(
     *             type="object"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Order with specified it not found"
     *     ),
     *   )
     */
    public function byId(Request $request, Order $order)
    {
        return response($this->orderService->loadProductsAndSuppliers($order));
    }

    /**
     * @OA\Post(
     *     path="/order",
     *     tags={"order"},
     *     summary="Stores a new order",
     *     description="Store a new order with its products and delivery address",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="address",
     *                     type="object",
     *                     description="object containing delivery_address attributes",
     *                     @OA\Property(
     *                         property="address",
     *                         type="string",
     *                         description="address line"
     *                     ),
     *                     @OA\Property(
     *                         property="zip",
     *                         type="string",
     *                         description="zip number"
     *                     ),
     *                     @OA\Property(
     *                         property="number",
     *                         type="integer",
     *                         description="address number"
     *                     ),
     *                     @OA\Property(
     *                         property="city_id",
     *                         type="integer",
     *                         description="id of the city"
     *                     ),
     *                 ),
     *                 @OA\Property(
     *                     property="products",
     *                     type="array",
     *                     @OA\Items(
     *                         type="integer"
     *                     ),
     *                     description="array of product id"
     *                 ),
     *                 @OA\Property(
     *                     property="order_date",
     *                     type="string",
     *                     description="the date of the order"
     *                 ),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             description="Object of the created order"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error",
     *         @OA\JsonContent(
     *             type="object",
     *             description="Object containing information about the validatio errors"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Order with specified it not found"
     *     ),
     *   )
     */
    public function store(OrderRequest $request)
    {
        $requestData = $request->all();
        $createdOrder = $this->orderService
            ->storeNewOrder($requestData);

        return response($createdOrder, 201);
    }
}
