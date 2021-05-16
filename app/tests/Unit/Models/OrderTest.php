<?php

namespace Tests\Unit\Models;

use App\Models\Order;
use Tests\TestCase;

class OrderTest extends TestCase
{
    public function test_if_it_has_an_float_attribute_containing_the_order_price()
    {
        $order = new Order();

        $this->assertIsFloat($order->orderPrice);
    }
}
