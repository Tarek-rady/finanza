<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

            return [

                'title_ar' => 'required' ,
                'title_en' => 'required' ,
                'story_ar' => 'required' ,
                'story_en' => 'required' ,
                'mission_ar' => 'required' ,
                'mission_en' => 'required' ,
                'vision_ar' => 'required' ,
                'vision_en' => 'required' ,
                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'img' => 'nullable|mimes:png,jpg,jpeg' ,
            ];


    }
}
