<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Residence extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'imageUrl' => $this->imageUrl,
            'address' => $this->address
        ];
    }
}
