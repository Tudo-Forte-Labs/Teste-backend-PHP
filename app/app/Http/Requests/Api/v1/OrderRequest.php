<?php

namespace App\Http\Requests\Api\v1;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    private $newOrderRules = [
        'address.address' => 'required|string|max:255',
        'address.zip' => 'required|string|max:8',
        'address.number' => 'nullable|int',
        'address.city_id' => 'required|exists:cities,id',
        'products.*.id' => 'required|exists:products,id'
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->route()->getName()) {
            case 'order.create':
                return $this->newOrderRules;
            default:
                return [];
        }

    }
}
