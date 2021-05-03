<?php


namespace App\Services\Api\v1;


use App\Contracts\InterfaceSearchableProduct;
use App\Models\Product;
use Illuminate\Support\Collection;

class ProductService implements InterfaceSearchableProduct
{

    public function searchForProduct(array $input)
    {
        $results = [];
        if (isset($input['name'])) {
            $results = $this->byName($input['name']);
        } else if (isset($input['reference'])) {
            $results = $this->byReference($input['reference']);
        }
        return $results;
    }

    function byName(string $name): Collection
    {
        return Product::whereLike('name', $name)
            ->get();
    }

    function byReference(string $reference): Collection
    {
        return Product::whereLike('name', $reference)
            ->get();
    }
}
