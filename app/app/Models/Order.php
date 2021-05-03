<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'delivery_address_id',
    ];

    public function getOrderPriceAttribute()
    {
        return $this->products()->sum('price');
    }

    public function orderDate()
    {
        return $this->attributes['created_at']->format('d/m/Y');
    }

    public function deliveryAddress()
    {
        return $this->belongsTo(DeliveryAddress::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
