<?php

namespace App\Http\Resources\V1;

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
        $manufacturer = $this->whenLoaded("manufacturers");
        return [
            "id" => $this->id,
            "name" => $this->name,
            "image" => $this->image,
            "id_manufacturer" => $this->manufacturer_id,
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at,
            "manufacturer" => new ManufacturerResource($manufacturer)
        ];
    }
}
