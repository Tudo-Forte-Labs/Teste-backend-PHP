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
        'created_at'
    ];

    protected $appends = [
        'orderPrice',
    ];

    public function getOrderPriceAttribute()
    {
        return $this->products()->sum('price');
    }

    public function getOrderDateAttribute()
    {
        return $this->attributes['created_at']->format('d/m/Y');
    }

    public function setOrderDateAttribute($value)
    {
        $this->attributes['created_at'] = $value;
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
