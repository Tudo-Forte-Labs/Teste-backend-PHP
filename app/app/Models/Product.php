<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Manufacturer;
class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['name', 'sku', 'description', 'price'];

    public function manufacturers() 
    {
        return $this->belongsToMany(Manufacturer::class, 'product_manufacturers');
    }

    public function resolveRouteBinding($value, $field = null)
    {
        // $response = $this->where('name', $value)->firstOrFail();

        // return $response;
    }
}
