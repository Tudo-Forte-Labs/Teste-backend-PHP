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

    /**
     * @param Int $externalId
     * @return \Illuminate\Http\JsonResponse
     */
    public function verifySeller(Int $externalId) {
        try {
            return $this->blacklist->where('external_id', $externalId)->exists();
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);
        }
    }

}
