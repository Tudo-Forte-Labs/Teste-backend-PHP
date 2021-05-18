<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\v1\Order\NewOrderRequest;
use App\Models\Order;
use App\Services\Api\v1\OrderService;

class OrderController extends Controller
{
    /**
     * OrderService instance.
     *
     * @var OrderService|null
     */
    private $orderService = null;

    /**
     * OrderController constructor.
     *
     * @param OrderService $orderService
     */
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    /**
     * Return the found order with it's products and suppliers
     *
     * @param Request $request
     * @param Order $order
     * @return Response - the specified order with it's products and suppliers
     */
    public function byId(Request $request, Order $order): Response
    {
        return response($this->orderService->loadProductsWithSuppliers($order));
    }

    /**
     * Create a new order.
     *
     * @param NewOrderRequest $request
     * @return Response - the newly created order
     */
    public function store(NewOrderRequest $request): Response
    {
        $requestData = $request->only([
            'address.address',
            'address.zip',
            'address.number',
            'address.city_id',
            'products',
            'order_date'
        ]);

        $createdOrder = $this->orderService
            ->storeNewOrder($requestData);

        return response($createdOrder, 201);
    }
}
