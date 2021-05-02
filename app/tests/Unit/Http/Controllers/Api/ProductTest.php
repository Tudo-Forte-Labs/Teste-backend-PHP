<?php

namespace Tests\Unit\Http\Controllers\Api;

use App\Models\Product;
use App\Models\Supplier;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_if_it_finds_a_product()
    {
        $product = Product::factory()
            ->for(Supplier::factory())->create();

        $response = $this->get('api/v1/product/search?name='.$product->name);

        $response->assertJsonFragment([
            'name' => $product->name
        ]);
        $response->assertStatus(200);
    }

    public function test_if_it_validates_the_input()
    {
        // missing required query parameter (name || reference)
        $response = $this->get('api/v1/product/search', [
            'Accept' => 'application/json'
        ]);

        $response->assertStatus(422);
    }
}
