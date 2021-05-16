<?php

namespace Tests\Unit\Models;

use App\Models\BlacklistedProduct;
use Tests\TestCase;

class BlacklistedProductTest extends TestCase
{
    public function test_if_it_returns_if_a_product_is_blacklisted()
    {
        $blacklistedProduct = new BlacklistedProduct();

        $this->assertIsBool($blacklistedProduct->isBlacklisted(
            'referencia', -1
        ));
    }
}
