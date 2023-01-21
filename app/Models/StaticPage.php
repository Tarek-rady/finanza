<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    use HasFactory;

    protected $guarded = [];

    // get Title translation
    public function getTitleAttribute()
    {
        return $this->attributes['title_' . app()->getLocale()];
    } // end getTitleAttribute

    // get Desc translation
    public function getDescAttribute()
    {
        return $this->attributes['desc_' . app()->getLocale()];
    } // end getDescAttribute

    // get Story translation
    public function getStoryAttribute()
    {
        return $this->attributes['story_' . app()->getLocale()];
    } // end getStoryAttribute


    // get Mission translation
    public function getMissionAttribute()
    {
        return $this->attributes['mission_' . app()->getLocale()];
    } // end getMissionAttribute


    // get Vision translation
    public function getVisionAttribute()
    {
        return $this->attributes['vision_' . app()->getLocale()];
    } // end getVisionAttribute

}
