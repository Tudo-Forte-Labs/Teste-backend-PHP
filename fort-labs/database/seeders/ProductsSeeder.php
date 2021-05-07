<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $products = [
            [
                'title' => 'Cooler Colmeia Com Led Gamer Warrior',
                'description' => 'Suporte para dar maior segurança e estabilidade ao Notebook',
                'ref' => 'AC327',
                'cost' => 196.90,
            ],
            [
                'title' => 'Ssd Samsung V-nand 970 Evo Plus Nvme M.2 1tb',
                'description' => 'Suporte para dar maior segurança e estabilidade ao Notebook',
                'ref' => 'MZ-V7S1T0BW',
                'cost' => 1000.00,
            ],
            [
                'title' => 'Fone de Ouvido Bluetooth on Ear Tune 500 Branco JBL',
                'description' => 'Fone de Ouvido Bluetooth',
                'ref' => 'JBLT500BTWHT',
                'cost' => 265.90,
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
