<?php

namespace App\Http\Controllers\Api;

use App\Constants\ApiStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ProductsRepository as Product;

class ProductController extends Controller {

    /**
     * @var Product
     */
    protected $product;

    /**
     * ProductController constructor.
     * @param Product $product
     */
    public function __construct(Product $product) {
        $this->product = $product;
    }

    /**
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function findAll() {
        try {
            return $this->product->findAll();
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()], ApiStatus::internalServerError);
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function findById($id) {
        try {
            return $this->product->findById($id);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()], ApiStatus::internalServerError);
        }
    }
}
