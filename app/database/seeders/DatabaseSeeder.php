<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $stateSeeder = new FederativeUnitSeeder();
        $stateSeeder->run();

        $citySeeder = new CitySeeder();
        $citySeeder->run();

        Product::factory()->count(10)->create();
    }
}
