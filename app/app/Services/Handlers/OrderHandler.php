<?php

namespace App\Services\Handlers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;

class OrderHandler {

    public function prepare (Request $request)
    {
        $response = json_decode($request->getContent());

        try {
            $response->date_sale = Carbon::createFromDate($response->date_sale);
        }
        catch(Exception $e) {
            Log::error($e->getMessage());
            $response->date_sale = null;
        }

        return $response;
    }
}