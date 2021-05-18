<?php

namespace Database\Factories;

use App\Models\DeliveryAddress;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'delivery_address_id' => function () {
                return DeliveryAddress::factory()->create()->id;
            },
            'deleted_at' => null
        ];
    }
}
