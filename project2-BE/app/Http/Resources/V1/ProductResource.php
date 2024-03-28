<?php

namespace App\Http\Resources\V1;

use App\Models\Manufacturers;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $products = Manufacturers::find($this->manufacturer_id);
        return [
            "id" => $this->id,
            "name" => $this->name,
            "image" => $this->image,
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at,
            "manufacturer" => new ManufacturerResource($products)
        ];
    }
}
