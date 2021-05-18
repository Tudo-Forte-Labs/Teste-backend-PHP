<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'federative_unit_id'
    ];

    public function federativeUnit()
    {
        return $this->belongsTo(FederativeUnit::class);
    }

    public function deliveryAddress()
    {
        return $this->hasMany(DeliveryAddress::class);
    }
}
