<?php


namespace App\Repositories;


interface BlacklistContract {

    public function verifySeller(Int $externalId);

}
