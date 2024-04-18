<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'genders' => $this->genders,
            'avatar' => $this->image,
            'roles' => $this->roles,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
        ];
    }
}
