<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'reference',
        'price',
        'supplier_id'
    ];

    public function scopeWhereLike($query, $attributeName, $value)
    {
        return $query->where($attributeName, 'like', "{$value}%")
            ->orWhere($attributeName, 'like', "%{$value}%");
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function orders() {
        $this->belongsToMany(Order::class);
    }
}
