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

    public function byId(Request $request, Order $order)
    {
        return response($this->orderService->loadProductsAndSuppliers($order));
    }

    public function store(OrderRequest $request)
    {

    }
}
