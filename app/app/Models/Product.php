<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'reference',
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
}
