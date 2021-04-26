<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use WithFaker;

    public function test_get_create_order()
    {    
        $products = Product::all()->random($this->faker->randomDigit());

        $data = [
            'date_sale' => $this->faker->date('Y-m-d'),
            'products' => $products->pluck('sku')
        ];

        $response = $this->json("POST", route('orders.store'), $data);

        $response->assertStatus(201);
        $response->assertJsonStructure([
            "data" => [
                'total',
                'date_sale',
                'products',
            ]
        ]);
    }

    public function test_get_order()
    {    
        $order = Order::all()->random(1)->first();

        $response = $this->get(route("orders.show", $order->id));

        $response->assertStatus(200);
        $response->assertJsonStructure([
            "data" => [
                'total',
                'date_sale',
                'products',
            ]
        ]);
    }
}
