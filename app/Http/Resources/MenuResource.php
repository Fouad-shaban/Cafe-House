<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "ID"=>$this->id,
            "image_url"=>$this->image,
            "Title_EN"=>$this->title_en,
            "Title_AR"=>$this->title_ar,
            "Description_EN"=>$this->description_en,
            "Description_AR"=>$this->description_ar,
            "price"=>$this->price,
            "Parent-ID"=>$this->parent_id,
        ];
    }
}
