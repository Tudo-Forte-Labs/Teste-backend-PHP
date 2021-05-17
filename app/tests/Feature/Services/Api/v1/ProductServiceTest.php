<?php

namespace Tests\Unit\Services\Api\v1;

use App\Exceptions\Products\ProductNotFoundException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\BlacklistedProduct;
use App\Services\Api\v1\ProductService;
use Tests\TestCase;

class ProductServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var ProductService
     */
    private $productService;

    public function setUp(): void
    {
        parent::setUp();
        $this->productService = new ProductService(new BlacklistedProduct(), new Product());
    }

    public function test_if_it_throws_product_not_found_exception()
    {
        $this->expectException(ProductNotFoundException::class);
        $this->productService->searchForProduct([]);
    }

    public function test_if_it_finds_product_by_name()
    {
        $product = Product::factory()
            ->for(Supplier::factory())
            ->create();

        $results = $this->productService->searchForProduct([
            'name' => $product->name
        ]);

        $this->assertEquals([$product->toArray()], $results);
    }

    public function test_if_it_finds_product_by_reference()
    {
        $product = Product::factory()
            ->for(Supplier::factory())
            ->create();

        $results = $this->productService->searchForProduct([
            'reference' => $product->reference
        ]);

        $this->assertEquals([$product->toArray()], $results);
    }
}
