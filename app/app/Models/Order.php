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

    public function serialize()
    {
        $response = [ 
            'total' => $this->total,
            'date_sale' => $this->date_sale
        ];

        foreach ( $this->products as $key => $product ) {
            
            $response['products'][$key] = [
                'name' => $product->name,
                'price' => $product->price,
            ];

            foreach ( $product->manufacturers as $id => $manufacturer ) {
                $response['products'][$key]['manufacturer'][$id] = [
                    'id' => $manufacturer->id,
                    'name' => $manufacturer->name
                ];
            }
        }
        
        return $response;
    }
}
