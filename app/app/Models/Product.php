<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Nicolaslopezj\Searchable\SearchableTrait;
use App\Models\Manufacturer;
use App\Models\Order;
class Product extends Model
{
    use HasFactory, SearchableTrait;

    protected $table = 'products';

    protected $fillable = ['name', 'sku', 'description', 'price'];

    protected $searchable = [
        'columns' => [
            'products.name' => 10,
        ]
    ];

    public function manufacturers() 
    {
        return $this->belongsToMany(Manufacturer::class, 'product_manufacturers');
    }

    public function orders() 
    {
        return $this->belongsToMany(Order::class, 'products_orders');
    }

    public function scopeOrderGroup(Builder $query, $skus)
    {
        $query->whereIn('sku', $skus);
    }

    public function scopeFindSku(Builder $query, $sku)
    {
        $query->where('sku', $sku);
    }

    public function scopeSearchName(Builder $query, $name)
    {
        $query->search('name', $name);
    }
    
    public function resolveRouteBinding($value, $field = null)
    {
        return $this->findSku($value)->firstOrFail();
    }
}
