<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Contracts\InterfaceSearchableProduct;
use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;
use App\Exceptions\Products\{ProductBlacklistedException, ProductNotFoundException};
use App\Http\Requests\Api\v1\Product\{ProductCreateRequest, ProductSearchRequest};

class ProductController extends Controller
{
    /**
     *
     * @var InterfaceSearchableProduct|null
     */
    private $productService = null;

    /**
     * ProductController constructor.
     *
     * @param InterfaceSearchableProduct $productService
     */
    public function __construct(InterfaceSearchableProduct $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Search for a product.
     *
     * @param ProductSearchRequest $request
     * @return ResponseFactory|Response
     */
    public function search(ProductSearchRequest $request)
    {
        try {
            $searchParam = $request->query();
            $results = $this->productService->searchForProduct($searchParam);

            return response($results, 200);

        } catch (ProductNotFoundException $e) {
            throw $e;
        }
    }

    /**
     * Create a product.
     *
     * @param ProductCreateRequest $request
     * @throws ProductBlacklistedException
     * @return ResponseFactory|Response
     */
    public function create(ProductCreateRequest $request)
    {
        $productData = $request->only([
            'name',
            'supplier_id',
            'reference',
            'price'
        ]);

        if($this->productService->isBlacklisted($productData))
            throw new ProductBlacklistedException();

        return response($this->productService->create($productData),
            201);
    }
}
