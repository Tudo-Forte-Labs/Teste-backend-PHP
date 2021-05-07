<?php


namespace App\Repositories;


interface SoldContract {

    public function store(Array $data);
    public function findSoldBySeller();

}
