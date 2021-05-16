<?php


namespace App\Services\Api\v1;


use App\Contracts\InterfaceSearchableProduct;
use App\Exceptions\Products\ProductNotFoundException;
use App\Models\Product;
use App\Models\BlacklistedProduct;

class ProductService implements InterfaceSearchableProduct
{
    /**
     * BlacklistedProduct model instance.
     *
     * @var BlacklistedProduct|null
     */
    private $productBlacklist = null;

    /**
     * Product model instance.
     *
     * @var Product|null
     */
    private $product = null;

    /**
     * ProductService constructor.
     *
     * @param BlacklistedProduct $productBlacklist
     * @param Product $product
     */
    public function __construct(BlacklistedProduct $productBlacklist, Product $product)
    {
        $this->productBlacklist = $productBlacklist;
        $this->product = $product;
    }

    /**
     * Search for a product by it's name or reference.
     *
     * @param array $input
     * @return array - array containing the matching products
     * @throws ProductNotFoundException - exception thrown in case of not finding any product
     */
    public function searchForProduct(array $input): array
    {
        $results = [];
        if (isset($input['name'])) {
            $results = $this->byName($input['name']);
        } else if (isset($input['reference'])) {
            $results = $this->byReference($input['reference']);
        }

        if(!count($results))
            throw new ProductNotFoundException();

        return $results;

    }

    /**
     * Search for products with a given name.
     *
     * @param string $name - the name of the product to search for
     * @return array - array containing the products that match the specified name
     */
    public function byName(string $name): array
    {
        return $this->product->whereLike('name', $name)
            ->get()->toArray();
    }

    /**
     * Search for products with a given reference.
     *
     * @param string $reference - the reference of the product to search for.
     * @return array - array containing the products that match the specified reference
     */
    public function byReference(string $reference): array
    {
        return $this->product->whereLike('reference', $reference)
            ->get()->toArray();
    }

    /**
     * Check if a product is blacklisted.
     *
     * @param array $product - an array containing information about the product to check
     * @return bool - boolean indicating if the product is blacklisted or not
     */
    public function isBlacklisted(array $product): bool
    {
        return $this->productBlacklist->isBlacklisted($product['reference'], $product['supplier_id']);
    }

    /**
     * Create a new product.
     *
     * @param array $product - an array containing the data of the product to be created
     * @return int - the id of the recently created product
     */
    public function create(array $product): int
    {
        return $this->product->create($product)->id;
    }
}
