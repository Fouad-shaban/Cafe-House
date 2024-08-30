<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable =[
        "id","image","title_en","title_ar","description_en","description_ar","price","parent_id"
    ];
}
