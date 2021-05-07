<?php


namespace App\Repositories;
use App\Constants\ApiMessages;
use App\Constants\ApiStatus;
use App\Models\Seller;
use Tymon\JWTAuth\Exceptions\JWTException;

class SellerRepository implements SellerContract {

    /**
     * @var Seller
     */
    protected $seller;

    /**
     * SellerRepository constructor.
     * @param Seller $seller
     */
    public function __construct(Seller $seller) {
        $this->seller = $seller;
    }

    /**
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function authentication(Array $data) {
        try {
            if(!$token = auth('seller')->attempt($data)) {
                return response()->json(['message' => ApiMessages::credential], ApiStatus::unprocessableEntity);
            } else {
                $user = auth('seller')->user();
                return response()->json(
                    [
                        'message' => 'Usuário autenticado',
                        'token' => $token,
                        'name' => $user->first_name,
                        'full_name' => $user->full_name,
                    ], ApiStatus::success);
            }
        } catch (JWTException $e) {
            return response()->json(['message' => ApiMessages::token], ApiStatus::internalServerError);
        }

    }

    /**
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function me() {
        return auth('seller')->user();
    }

}
