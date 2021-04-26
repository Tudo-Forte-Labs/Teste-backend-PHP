<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class ProductTest extends TestCase
{
    public function test_get_product_by_sku()
    {
        $product = Product::all()->random(1)->first();
        
        $response = $this->get(route('products.show', $product->sku));
        
        $response->assertStatus(200);
        $response->assertJsonStructure([
            "data" => [
                'id',
                'name',
                'sku',
                'description',
                'price',
                'created_at',
                'updated_at'
            ]
        ]);
    }

    public function test_get_product_by_sku_fail()
    {   
        $sku = 'not-exists';

        $response = $this->get(route('products.show', $sku));
        
        $response->assertStatus(404);
    }

    public function test_get_product_by_name()
    {
        $product = Product::all()->random(1)->first();
        
        $response = $this->get(route('products.index', ['name' => $product->name]));
        
        $response->assertStatus(200);
        $response->assertJsonStructure([
            "data" => [
                [
                    'id',
                    'name',
                    'sku',
                    'description',
                    'price',
                    'created_at',
                    'updated_at'
                ]
            ]
        ]);
    }

    public function test_get_product_by_name_fail()
    {   
        $name = Hash::make('not found');

        $response = $this->get(route('products.index', ['name' => $name]));
        
        $response->assertStatus(404);        
    }
}
