<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manufacturer;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 90; $i++) {
            Manufacturer::factory()->create();
        }
    }
}
