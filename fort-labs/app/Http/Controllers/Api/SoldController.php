<?php

namespace App\Http\Controllers\Api;

use App\Constants\ApiStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SoldRepository as Sold;

class SoldController extends Controller {

    /**
     * @var Sold
     */
    protected $sold;

    /**
     * SoldController constructor.
     * @param Sold $sold
     */
    public function __construct(Sold $sold) {
        $this->sold = $sold;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request) {
        try {
            return $this->sold->store($request->all());
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()], ApiStatus::internalServerError);
        }
    }

    public function findSoldBySeller() {
        try {
            return $this->sold->findSoldBySeller();
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()], ApiStatus::internalServerError);
        }
    }

}