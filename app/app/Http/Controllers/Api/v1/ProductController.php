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

    /**
     * @OA\Get(
     *     path="/product/search",
     *     tags={"product"},
     *     summary="Finds Product by name/ref",
     *     description="Search for a product by name and/or reference",
     *     @OA\Parameter(
     *         name="name",
     *         in="query",
     *         description="name of the product",
     *         required=true,
     *     ),
     *     @OA\Parameter(
     *         name="reference",
     *         in="query",
     *         description="reference of the product",
     *         required=false,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items()
     *         ),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Product with specified name or reference not found"
     *     ),
     *   )
     */
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
