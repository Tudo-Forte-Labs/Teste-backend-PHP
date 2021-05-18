<?php

namespace Database\Factories;

use App\Models\FederativeUnit;
use Illuminate\Database\Eloquent\Factories\Factory;

class FederativeUnitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FederativeUnit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'deleted_at' => null
        ];
    }
}
