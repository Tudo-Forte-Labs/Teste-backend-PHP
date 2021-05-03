<?php


namespace App\Contracts;


interface InterfaceSearchableProduct
{
    function byName(string $name): array;

    function byReference(string $reference): array;
}
