<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = ['total', 'date_sale'];

    protected $casts =[
        'date_sale' => 'date'
    ];

    public function products() 
    {
        return $this->belongsToMany(Product::class, 'products_orders');
    }
}
