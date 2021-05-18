<?php

namespace App\Http\Requests\Api\v1\Order;

use Illuminate\Foundation\Http\FormRequest;

class NewOrderRequest extends FormRequest
{
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
        return [
            'address.address' => 'required|string|max:255',
            'address.zip' => 'required|string|max:8',
            'address.number' => 'nullable|int',
            'address.city_id' => 'required|exists:cities,id',
            'products.*.id' => 'required|exists:products,id',
            'order_date' => 'nullable|date_format:d/m/Y'
        ];

    }
}
