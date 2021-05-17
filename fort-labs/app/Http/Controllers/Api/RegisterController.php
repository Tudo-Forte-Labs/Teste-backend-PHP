<?php

namespace App\Http\Controllers\Api;

use App\Constants\ApiMessages;
use App\Constants\ApiStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\BlacklistRepository as Blacklist;
use App\Repositories\SellerRepository as Seller;

class RegisterController extends Controller {

    /**
     * @var Blacklist
     * @var Seller
     */
    protected $blacklist, $seller;

    /**
     * RegisterController constructor.
     * @param Blacklist $blacklist
     * @param Seller $seller
     */
    public function __construct(Blacklist $blacklist, Seller $seller) {
        $this->blacklist = $blacklist;
        $this->seller = $seller;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request) {
        try {
            if($this->verifySeller($request->external_id)) {
              return response()->json(['message' => ApiMessages::blocked], ApiStatus::unprocessableEntity);
            } else {
                return $this->seller->register($request->all());
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);
        }
    }

    /**
     * @param Int $externalId
     * @return \Illuminate\Http\JsonResponse
     */
    private function verifySeller(Int $externalId) {
        return $this->blacklist->verifySeller($externalId);
    }
}
