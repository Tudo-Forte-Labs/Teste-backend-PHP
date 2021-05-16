<?php


namespace App\Exceptions\Products;


use Symfony\Component\HttpKernel\Exception\HttpException;

class ProductBlacklistedException extends HttpException
{
    public function __construct()
    {
        parent::__construct($statusCode = 400, $message = 'Product is blacklisted');
    }
}
