<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    public function getOrderPriceAttribute(): float
    {
        return $this->products()->sum('price');
    }

    public function getOrderDateAttribute(): string
    {
        return $this->attributes['created_at']->format('d/m/Y');
    }

    public function setOrderDateAttribute($value): void
    {
        if($date = Carbon::createFromFormat('d/m/Y', $value))
            $this->attributes['created_at'] = $date->toDateTimeString();
    }

    public function deliveryAddress(): BelongsTo
    {
        return $this->belongsTo(DeliveryAddress::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
