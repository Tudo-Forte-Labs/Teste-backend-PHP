<?php


namespace App\Repositories;
use App\Constants\ApiMessages;
use App\Constants\ApiSold;
use App\Constants\ApiStatus;
use App\Models\Sold;
use App\Models\Seller;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class SoldRepository implements SoldContract {

    /**
     * @var Sold
     * @var Seller
     * @var Product
     */
    protected $sold, $seller, $product;

    /**
     * SoldRepository constructor.
     * @param Sold $sold
     * @param Seller $seller
     * @param Product $product
     */
    public function __construct(Sold $sold, Seller $seller, Product $product) {
        $this->sold = $sold;
        $this->seller = $seller;
        $this->product = $product;
    }

    /**
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Array $data) {
        try {
            DB::beginTransaction();

            $arr = [
                'address' => $data['address'],
                'number' => $data['number'],
                'neighborhood' => $data['neighborhood'],
                'purchase_date' => now(),
                'status' => ApiSold::awaitingPayment,
                'product_id' => $data['product_id'],
                'seller_id' => auth('seller')->user()->id
            ];

            $save = $this->sold->create($arr);
            if($save) {
                DB::commit();
                return response()->json(['message' => ApiMessages::success], ApiStatus::created);
            } else {
                DB::rollBack();
                return response()->json(['message' => ApiMessages::error], ApiStatus::unprocessableEntity);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()], ApiStatus::internalServerError);
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function findSoldBySeller() {
        $id = auth('seller')->user()->id;
        return $this->seller->with(['sold.product'])->find($id);
    }

    public function findByNameOrRef(String $name) {
        try {
            $id = auth('seller')->user()->id;
            return $this->product->where('title', 'like', '%'.$name.'%')
                ->orWhere('ref', 'like', '%'.$name.'%')
                ->with(['sold.seller' => function($query) use($id){
                    $query->where('id', $id);
                }])
                ->get();
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()], ApiStatus::internalServerError);
        }
    }

}
