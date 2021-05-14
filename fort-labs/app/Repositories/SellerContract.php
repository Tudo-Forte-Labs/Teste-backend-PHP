<?php


namespace App\Repositories;


interface SellerContract {

    public function register(Array $data);
    public function authentication(Array $data);
    public function me();

}
