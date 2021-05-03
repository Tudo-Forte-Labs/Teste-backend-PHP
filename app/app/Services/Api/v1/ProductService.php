<?php


namespace App\Services\Api\v1;


use App\Contracts\InterfaceSearchableProduct;
use App\Models\Product;

class ProductService implements InterfaceSearchableProduct
{

    public function searchForProduct(array $input): array
    {
        $results = [];
        if (isset($input['name'])) {
            $results = $this->byName($input['name']);
        } else if (isset($input['reference'])) {
            $results = $this->byReference($input['reference']);
        }
        return $results;
    }

    public function byName(string $name): array
    {
        return Product::whereLike('name', $name)
            ->get()->toArray();
    }

    public function byReference(string $reference): array
    {
        return Product::whereLike('reference', $reference)
            ->get()->toArray();
    }
}
