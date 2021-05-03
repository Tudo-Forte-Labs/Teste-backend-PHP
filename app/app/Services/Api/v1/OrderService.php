<?php


namespace App\Services\Api\v1;


use App\Models\DeliveryAddress;
use Illuminate\Database\Eloquent\Model;

class OrderService
{
    public function loadProductsAndSuppliers(Model $order): array
    {
        $order->load('products.supplier');
        return $order->toArray();
    }

    public function storeNewOrder(array $data)
    {
        $newAddress = DeliveryAddress::create($data['address']);

        $newOrder = $newAddress->orders()->create();

        $newOrder->products()->sync($data['products']);

        return $newOrder;
    }
}
