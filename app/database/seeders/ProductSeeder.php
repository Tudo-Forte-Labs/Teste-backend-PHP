<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $radom = random_int(1, 20);

        for ($i = 0; $i <= $radom; $i++) {
            Product::factory()->create();
        }

    }
}
