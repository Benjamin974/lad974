<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommandResource extends JsonResource
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
        $status = new StatusResource($this->status);
        $deliveryAddress = new AddressResource($this->deliveryAddress);
        $facturationAddress = new AddressResource($this->facturationAddress);
        
        return [
            'id' => $this->id,
            'status' => $status,
            'user' => $user,
            'deliveryAddress' => $deliveryAddress,
            'facturationAddress' => $facturationAddress
        ];
    }
}
