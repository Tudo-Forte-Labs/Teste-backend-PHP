<?php

namespace Tests\Unit\Services\Api\v1;

use App\Models\DeliveryAddress;
use App\Models\Order;
use App\Models\Product;
use App\Models\Supplier;
use App\Services\Api\v1\OrderService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderServiceTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    private function generateProductsAndAddress(): array
    {
        $products = Product::factory()
            ->for(Supplier::factory())
            ->count(2);

        $deliveryAddress = DeliveryAddress::factory();

        return [
            'products' => $products,
            'address' => $deliveryAddress
        ];
    }

    public function test_if_it_return_the_order_with_products()
    {
        $testData = $this->generateProductsAndAddress();

        $order = Order::factory()
            ->has($testData['products'])
            ->has($testData['address'])
            ->create();

        $orderService = new OrderService();

        $retrievedOrder = $orderService->loadProductsAndSuppliers($order);

        $this->assertArrayHasKey('products', $retrievedOrder);
        $this->assertCount(2, $retrievedOrder['products']);
        $this->assertArrayHasKey('orderPrice', $retrievedOrder);
        $this->assertNotNull('orderPrice');

        $this->assertTrue(true);
    }

    public function test_if_it_stores_a_new_order()
    {
        $testData = $this->generateProductsAndAddress();
        $productCollection = $testData['products']->create();
        $addressInstance = $testData['address']->make();

        $testData['products'] = $productCollection->map(function ($product) {
            return $product['id'];
        });

        $testData['address'] = $addressInstance->toArray();
        $testData['order_date'] = '01/01/2021';

        $orderService = new OrderService();

        $newOrder = $orderService->storeNewOrder(
            $testData
        );

        $this->assertDatabaseHas('delivery_addresses',
            $addressInstance->toArray());
    }
}
