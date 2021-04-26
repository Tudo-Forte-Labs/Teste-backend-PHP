<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
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
