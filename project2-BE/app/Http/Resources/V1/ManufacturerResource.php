<?php

namespace App\Http\Resources\V1;

use App\Models\Manufacturers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ManufacturerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "image" => $this->web_image,
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at,
            "count_products"=> ProductResource::collection($this->whenLoaded("products"))->count()
        ];
    }
}