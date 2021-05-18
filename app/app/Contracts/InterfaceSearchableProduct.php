<?php


namespace App\Contracts;


interface InterfaceSearchableProduct
{

    /**
     * @param string $name - the name of the product to search for
     * @return array - array containing the products that match the specified name
     */
    function byName(string $name): array;

    /**
     * @param string $reference - the reference of the product to search for.
     * @return array - array containing the products that match the specified reference
     */
    function byReference(string $reference): array;

    /**
     * @param array $product - an array containing information about the product to check
     * @return bool - boolean indicating if the product is blacklisted or not
     */
    function isBlacklisted(array $product): bool;

    /**
     * @param array $product - an array containing the data of the product to be created
     * @return int - the id of the recently created product
     */
    function create(array $product): int;
}
