<?php


namespace App\Repositories;


interface SellerContract {

    public function authentication(Array $data);
    public function me();

}
