<?php


namespace App\Repositories;
use App\Models\Product;

class ProductsRepository implements ProductsContract {

    /**
     * @var Product
     */
    protected $product;

    /**
     * ProductsRepository constructor.
     * @param Product $product
     */
    public function __construct(Product $product) {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function findAll() {
        return $this->product->where('active', 1)
            ->orderBy('title')
            ->get();
    }

    /**
     * @param Int $id
     * @return mixed
     */
    public function findById(Int $id) {
        return $this->product->find($id);
    }

}
