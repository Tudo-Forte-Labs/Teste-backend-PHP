<?php

namespace Tests\Unit\Services\Api\v1;

use App\Models\DeliveryAddress;
use App\Models\Order;
use App\Models\Product;
use App\Models\Supplier;
use App\Services\Api\v1\OrderService;
use Tests\TestCase;

class OrderServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_if_it_return_the_order_with_products()
    {
        $products = Product::factory()
            ->for(Supplier::factory())
            ->count(2);

        $deliveryAddress = DeliveryAddress::factory();

        $order = Order::factory()
            ->has($products)
            ->has($deliveryAddress)
            ->create();

        $orderService = new OrderService();



        $retrievedOrder = $orderService->loadProductsAndSuppliers($order);

        var_dump($retrievedOrder);

        $this->assertArrayHasKey('products', $retrievedOrder);
        $this->assertCount(2, $retrievedOrder['products']);
        $this->assertArrayHasKey('orderPrice', $retrievedOrder);
        $this->assertNotNull('orderPrice');

        $this->assertTrue(true);
    }
}
