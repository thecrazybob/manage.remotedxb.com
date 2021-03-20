<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListingResource extends JsonResource
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
            "id" => $this->id,
            "slug" => $this->slug,
            "position" => $this->position,
            "description" => $this->description,
            "link" => $this->link,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "company" => $this->team->name,
            "logo" => $this->team->logo,
            "tags" => $this->tag->implode('name', ',')
        ];
    }
}
