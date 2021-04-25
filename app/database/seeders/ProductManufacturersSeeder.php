<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Manufacturer;

class ProductManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $manufacturers = Manufacturer::all();

        foreach ($products as $product) {   
            
            $n = random_int(1, 5);

            $manufacturers_id = $manufacturers->random($n)->pluck('id');            
            $product->manufacturers()->sync($manufacturers_id);
        }
    }
}
