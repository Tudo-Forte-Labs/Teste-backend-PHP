<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Manufacturer extends Model
{
    use HasFactory;

    protected $table = 'manufacturers';

    protected $fillable = ['name'];

    public function products() 
    {
        return $this->belongsToMany( Product::class, 'product_manufacturers');
    }
}
