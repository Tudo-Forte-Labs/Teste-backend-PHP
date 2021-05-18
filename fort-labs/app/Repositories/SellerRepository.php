<?php


namespace App\Repositories;
use App\Constants\ApiMessages;
use App\Constants\ApiStatus;
use App\Models\Seller;
use Illuminate\Support\Facades\DB;
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
    public function register(Array $data) {
        try {
            $pass = 'fortelabs1205';
            $arr = [
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => $pass
            ];
            DB::beginTransaction();
            $save = $this->seller->create($data);
            if($save) {
                return response()->json(['message' => ApiMessages::success], ApiStatus::created);
            } else {
                return response()->json(['message' => ApiMessages::error], ApiStatus::unprocessableEntity);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);
        }
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
