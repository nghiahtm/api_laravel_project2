<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    protected $collectionToken;
    public function __construct($collection)
    {
        parent::__construct($collection);
        $this->collectionToken = $collection;
//        print_r($collectionToken);
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->collectionToken['name'],
            'email' => $this->collectionToken['email'],
            'genders' => $this->collectionToken['genders'],
            'avatar' => $this->collectionToken['image'],
            'roles' => $this->collectionToken['roles'],
            'token'=> $this->collectionToken['token']
        ];
    }
}
