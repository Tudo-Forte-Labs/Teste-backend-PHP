<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seller extends Model {

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'active'
    ];

    protected $appends = [
        'full_name'
    ];

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }
}
