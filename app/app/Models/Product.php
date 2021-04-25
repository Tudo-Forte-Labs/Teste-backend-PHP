<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function resolveRouteBinding($value, $field = null)
    {
        // $response = $this->where('name', $value)->firstOrFail();

        // return $response;
    }
}
