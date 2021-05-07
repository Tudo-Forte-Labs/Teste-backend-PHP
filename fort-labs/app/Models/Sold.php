<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sold extends Model {

    use HasFactory, SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [
        'address',
        'number',
        'neighborhood',
        'purchase_date',
        'status',
        'product_id',
        'seller_id'
    ];

    /**
     * @var string[]
     */
    protected $appends = [
        'total'
    ];

}
