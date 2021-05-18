<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\DeliveryAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeliveryAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address,
            'number' => $this->faker->randomNumber(3),
            'zip' => $this->faker->text(8),
            'city_id' => function () {
                return City::factory()->create()->id;
            },
            'deleted_at' => null
        ];
    }
}
