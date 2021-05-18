<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $sellers = [
            [
                'first_name' => 'Willians',
                'last_name' => 'Pereira',
                'email' => 'willians@4vconnect.com',
                'password' => 'master'
            ],
            [
                'first_name' => 'Canalfy',
                'last_name' => 'Tudo Forte',
                'email' => 'tudoforte@canalfy.com',
                'password' => 'master'
            ]
        ];

        foreach ($sellers as $seller) {
            Seller::create($seller);
        }
    }
}
