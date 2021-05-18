<?php

namespace Tests\Unit\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\v1\ProductController;
use App\Exceptions\Products\ProductNotFoundException;
use App\Http\Requests\Api\v1\Product\ProductSearchRequest;
use App\Models\BlacklistedProduct;
use App\Models\Product;
use App\Services\Api\v1\ProductService;
use PHPUnit\Framework\TestCase;

class ProductControllerUnit extends TestCase
{
    /**
     * @var ProductService
     */
    private $productService;

    public function setUp(): void
    {
        parent::setUp();
        $this->productService = new ProductService(new BlacklistedProduct(), new Product());
    }

    public function test_if_it_trows_product_not_found_exception()
    {
        $productController = new ProductController($this->productService);
        $request = ProductSearchRequest::create(
            '/api/v1/product/search?name=testeabc987',
            'get'
        );

        $this->expectException(ProductNotFoundException::class);
        $productController->search($request);
    }
}
