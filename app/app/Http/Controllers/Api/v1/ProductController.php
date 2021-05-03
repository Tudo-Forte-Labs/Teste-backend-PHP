<?php

namespace App\Http\Controllers\Api\v1;

use App\Contracts\InterfaceSearchableProduct;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\v1\ProductRequest;
use Mockery\Exception;

class ProductController extends Controller
{
    private $productService = null;

    public function __construct(InterfaceSearchableProduct $productService)
    {
        $this->productService = $productService;
    }

    public function search(ProductRequest $request)
    {
        $searchParam = $request->query();

        try {

            $results = $this->productService->searchForProduct($searchParam);

            if(!count($results)) {
                return response($results, 404);
            }

            return response($results, 200);

        } catch (Exception $e) {
            return response($e->getMessage(), 500);
        }
    }
}
