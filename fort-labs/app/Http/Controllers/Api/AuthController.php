<?php

namespace App\Http\Controllers\Api;

use App\Constants\ApiStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SellerRepository as Seller;

class AuthController extends Controller {

    /**
     * @var Seller
     */
    protected $seller;

    /**
     * AuthController constructor.
     * @param Seller $seller
     */
    public function __construct(Seller $seller) {
        $this->seller = $seller;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function authentication(Request $request) {
        try {
            return $this->seller->authentication($request->all());
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()], ApiStatus::internalServerError);
        }
    }

    /**
     * @return \Illuminate\Contracts\Auth\Authenticatable|\Illuminate\Http\JsonResponse|null
     */
    public function me() {
        try {
            return $this->seller->me();
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()], ApiStatus::internalServerError);
        }
    }
}
