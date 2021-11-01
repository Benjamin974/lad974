<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $company = new CompanyResource($this->company);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'descirpiton' => $this->description,
            'price' => $this->price,
            'quantite' => $this->quantite,
            'company' => $company,
        ];
    }
}
