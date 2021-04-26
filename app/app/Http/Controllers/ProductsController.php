<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductCollection;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->get('name');

        $products = Product::search($name)->get();

        if (count($products) > 0 ) {
            return new ProductCollection($products);
        }
        else {
            return response('Not found', 404);
        }
    }

    public function show(Product $product)
    {
        return new ProductResource($product);
    }
}
