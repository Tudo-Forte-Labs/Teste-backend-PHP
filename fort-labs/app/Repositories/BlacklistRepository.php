<?php


namespace App\Repositories;
use App\Models\Blacklist;

class BlacklistRepository implements BlacklistContract {

    /**
     * @var Blacklist
     */
    protected $blacklist;

    /**
     * BlacklistRepository constructor.
     * @param Blacklist $blacklist
     */
    public function __construct(Blacklist $blacklist) {
        $this->blacklist = $blacklist;

    }

    public function verifySeller(Int $externalId) {

    }

}
