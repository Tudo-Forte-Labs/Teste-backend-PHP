<?php


namespace App\Services\Api\v1;


use Illuminate\Database\Eloquent\Model;

class OrderService
{
    public function loadProductsAndSuppliers(Model $order): array
    {
        $order->load('products.supplier');
        return $order->toArray();
    }
}
