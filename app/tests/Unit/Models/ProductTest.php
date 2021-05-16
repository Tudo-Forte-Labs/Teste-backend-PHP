<?php

namespace Tests\Unit\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_if_the_query_scope_returns_a_builder_instance()
    {
        $product = new Product();
        $queryScope = $product->whereLike('name', 'productTest');

        $this->assertInstanceOf(
            Builder::class,
            $queryScope
        );
    }
}
