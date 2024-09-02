<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'seller_name' => $this->seller ? $this->seller->name : null,
            'type' => $this->type,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'img_link' => $this->img_link,
        ];
    }
}
