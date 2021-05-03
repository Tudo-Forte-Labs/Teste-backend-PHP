<?php

namespace Tests\Unit\Services;

use App\Models\Product;
use App\Models\Supplier;
use App\Services\Api\v1\ProductService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_if_it_return_empty_array_when_input_is_empty()
    {
        $productService = new ProductService();

        $results = $productService->searchForProduct([]);

        $this->assertEmpty($results);
    }

    public function test_if_it_finds_product_by_name()
    {
        $product = Product::factory()
            ->for(Supplier::factory())
            ->create();

        $productService = new ProductService();

        $results = $productService->searchForProduct([
            'name' => $product->name
        ]);

        $this->assertEquals([$product->toArray()], $results);
    }

    public function test_if_it_finds_product_by_reference()
    {
        $product = Product::factory()
            ->for(Supplier::factory())
            ->create();

        $productService = new ProductService();

        $results = $productService->searchForProduct([
            'reference' => $product->reference
        ]);

        $this->assertEquals([$product->toArray()], $results);
    }
}
