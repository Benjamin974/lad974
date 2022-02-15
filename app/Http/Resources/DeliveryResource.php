<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $deliveryMan = new UserResource($this->deliveryMan);
        $command = new CommandResource($this->command);
        $status = new StatusResource($this->status);
        
        return [
            'id' => $this->id,
            'quantite' => $this->quantite,
            'deliveryMan' => $deliveryMan,
            'command' => $command,
            'status' => $status
        ];
    }
}
