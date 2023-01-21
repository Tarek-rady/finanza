<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = [];

     // get Desc translation
     public function getDescAttribute()
     {
         return $this->attributes['desc_' . app()->getLocale()];
     } // end getDescAttribute


     // get Title translation
     public function getTitleAttribute()
     {
         return $this->attributes['title_' . app()->getLocale()];
     } // end getTitleAttribute

}
