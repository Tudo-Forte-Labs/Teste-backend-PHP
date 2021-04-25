<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\Handlers\OrderHandler;
use App\Models\Order;
use App\Models\Product;
use Exception;

class OrdersController extends Controller
{   
    protected $handler;

    public function __construct()
    {
        $this->handler = new OrderHandler;
    }

    public function store(Request $request)
    {
        $data = $this->handler->prepare($request);

        try {
            $order = Order::create([
                'date_sale' => $data->date_sale
            ]);
    
            $products = Product::orderGroup($data->products)->get();
            
            $order->total = $products->sum('price');
            
            $order->save();
    
            $order->products()->sync($products->pluck(['id']));

        }catch(Exception $e) {
            Log::error($e->getMessage());
        }

        return response($order->serialize(), 200);
    }

    public function show(Order $order)
    {
        //
    }
}
