<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'name_ar' => 'required|max:255' ,
            'name_en' => 'required|max:255' ,
            'desc_en' => 'required' ,
            'desc_en' => 'required' ,
            'icon' => 'required' ,
        ];
    }
}
