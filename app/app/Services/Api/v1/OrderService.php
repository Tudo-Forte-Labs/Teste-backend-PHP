<?php

namespace App\Services\Api\v1;

use App\Models\DeliveryAddress;
use App\Models\Order;

class OrderService
{
    /**
     * DeliveryAddress model instance.
     *
     * @var DeliveryAddress|null
     */
    private $deliveryAddress = null;

    /**
     * OrderService constructor.
     *
     * @param DeliveryAddress $deliveryAddress
     */
    public function __construct(DeliveryAddress $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * Return an order with it's products and suppliers
     *
     * @param Order $order
     * @return array
     */
    public function loadProductsWithSuppliers(Order $order): array
    {
        $order->load('products.supplier');
        return $order->toArray();
    }

    /**
     * Create a new order with it's delivery address and products.
     *
     * @param array $data
     * @return Order
     */
    public function storeNewOrder(array $data): Order
    {
        $newAddress = $this->deliveryAddress->create($data['address']);

        $newOrder = $newAddress->orders()->create();
        $newOrder->products()->sync($data['products']);

        return $newOrder;
    }
}
