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

        return new ProductCollection(Product::search($name)->get());
    }

    public function show(Product $product)
    {
        return new ProductResource($product);
    }
}
