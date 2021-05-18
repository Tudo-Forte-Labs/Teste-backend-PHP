<?php

namespace App\Exceptions\Products;

use Symfony\Component\HttpKernel\Exception\HttpException;

class ProductNotFoundException extends HttpException
{
    public function __construct()
    {
        parent::__construct($statusCode = 400, $message = 'Product not found');
    }
}
