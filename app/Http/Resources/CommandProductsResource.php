<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommandProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $product = new ProductResource($this->product);
        $commande = new CommandResource($this->commande);
        return [
            'id' => $this->id,
            'quantite' => $this->quantite,
            'commande' => $commande,
            'product' => $product,
            'created_at' => $this->created_at
        ];
    }
}
