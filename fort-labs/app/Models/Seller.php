<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Seller extends Authenticatable implements JWTSubject {

    use HasFactory, Notifiable, SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'active'
    ];

    /**
     * @var string[]
     */
    protected $appends = [
        'full_name',
        'total',
        'formatted_total'
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'password'
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
        'updated_at' => 'datetime:d/m/Y',
        'deleted_at' => 'datetime:d/m/Y',
    ];

    /**
     * @param $value
     */
    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * @param $value
     * @return string
     */
    public function getActiveAttribute($value) {
        return $value === 1 ? 'Ativo' : 'Inativo';
    }

    /**
     * @return string
     */
    public function getFullNameAttribute() {
        $firstName = $this->attributes['first_name'];
        $lastName = $this->attributes['last_name'];
        return "${firstName} ${lastName}";
    }

    /**
     * @return mixed
     */
    public function getTotalAttribute() {
        $id = $this->attributes['id'];
        $collection =  Sold::where('seller_id', $id)->with('product')->get();
        return $collection->map(function($item, $key){
          return $item->product->cost;
        })->sum();
    }

    /**
     * @return string
     */
    public function getFormattedTotalAttribute() {
        $id = $this->attributes['id'];
        $collection =  Sold::where('seller_id', $id)->with('product')->get();
        $cost = $collection->map(function($item, $key){
            return $item->product->cost;
        })->sum();

        return monetary($cost);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sold() {
        return $this->hasMany(Sold::class);
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
