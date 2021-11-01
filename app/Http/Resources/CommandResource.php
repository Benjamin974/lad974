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
        $product = new ProductResource($this->product);
        $status = new StatusResource($this->status);
        
        return [
            'id' => $this->id,
            'quantite' => $this->quantite,
            'user' => $user,
            'product' => $product,
            'status' => $status
        ];
    }
}
