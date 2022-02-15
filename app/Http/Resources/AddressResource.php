<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $user = new UserResource($this->user);

        return [
            'id' => $this->id,
            'address' => $this->address,
            'name' => $this->name,
            'pays' => $this->pays,
            'postal_code' => $this->postal_code,
            'city' => $this->city,
            'user' => $user
        ];
    }
}
