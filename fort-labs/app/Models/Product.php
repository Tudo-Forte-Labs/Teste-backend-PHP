<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {

    use HasFactory, SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'ref',
        'cost',
        'active'
    ];

    /**
     * @var string[] 
     */
    protected $appends = [
        'formatted_cost'
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
     * @return string
     */
    public function getActiveAttribute($value) {
        return $value === 1 ? 'Ativo' : 'Inativo';
    }

    public function getFormattedCostAttribute() {
        $value = $this->attributes['cost'];
        return 'R$ ' . monetary($value);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sold() {
        return $this->hasOne(Sold::class);
    }
}
