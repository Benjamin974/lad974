<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryAddressResource extends JsonResource
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
            'postal_code' => $this->email,
            'phone_number' => $this->phone_number,
            'user' => $user,
        ];
    }
}
