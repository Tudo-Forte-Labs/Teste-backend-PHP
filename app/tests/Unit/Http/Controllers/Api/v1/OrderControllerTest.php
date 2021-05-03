<?php

namespace Tests\Unit\Http\Controllers\Api\v1;

use App\Models\DeliveryAddress;
use App\Models\Order;
use App\Models\Product;
use App\Models\Supplier;
use Tests\TestCase;

class OrderControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_if_it_returns_the_order_data()
    {
        $products = Product::factory()
            ->for(Supplier::factory())
            ->count(2);

        $deliveryAddress = DeliveryAddress::factory();

        $order = Order::factory()
            ->has($products)
            ->has($deliveryAddress)
            ->create();

        $response = $this->get('/api/v1/order/'.$order->id);

        $response->assertJsonFragment([
            'id' => $order->id
        ]);

        $response->assertStatus(200);
    }

    public function test_if_it_validates_the_input()
    {
        $response = $this->post(route('order.create'), [], [
            'Accept' => 'application/json'
        ]);

        $response->assertStatus(422);
    }
}
