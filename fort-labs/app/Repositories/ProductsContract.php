<?php


namespace App\Repositories;


interface ProductsContract {

    public function findAll();
    public function findById(Int $id);

}
