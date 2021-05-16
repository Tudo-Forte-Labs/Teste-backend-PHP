<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlacklistedProduct extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'reference',
        'supplier_id'
    ];

    public function isBlacklisted(string $reference, int $supplierId): bool
    {
         return $this->where([
             'reference' => $reference,
             'supplier_id' => $supplierId
         ])->exists();
    }
}
