<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CatRequest extends FormRequest
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
                'title_ar' => 'required|max:255' ,
                'title_en' => 'required|max:255' ,
                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'img' => $this->method() == 'POST' ? 'required|mimes:png,jpg,jpeg' : 'nullable|mimes:png,jpg,jpeg' ,
            ];

    }
}
