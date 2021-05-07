<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sold extends Model {

    use HasFactory;

    protected $fillable = [
        'address',
        'number',
        'neighborhood',
        'date',
        'status',
        'product_id',
        'seller_id'
    ];

    protected $appends = [
        'total'
    ];

}
