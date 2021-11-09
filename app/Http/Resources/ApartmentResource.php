<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApartmentResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "cost" => $this->cost,
            "city" => $this->city->name,
            "options" => $this->options,
            "photos" => $this->photos
        ];
    }
}
