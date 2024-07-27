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
            'type_id' => $this->type_id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'img_link' => $this->img_link,
        ];
    }
}
