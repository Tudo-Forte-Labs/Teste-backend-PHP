<?php


namespace App\Contracts;


use Illuminate\Support\Collection;

interface InterfaceSearchableProduct
{
    function byName(string $name): Collection;

    function byReference(string $reference): Collection;
}
