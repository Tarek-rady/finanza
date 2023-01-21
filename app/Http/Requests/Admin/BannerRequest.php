<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        if($this->method() == 'POST'){

            return [

                'title_ar' => 'required|max:255' ,
                'title_en' => 'required|max:255' ,
                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'img' => 'required|mimes:png,jpg,jpeg' ,
                'status'  => 'required'

            ];
        }else{
            return [
                
                'title_ar' => 'required|max:255' ,
                'title_en' => 'required|max:255' ,
                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,
                'img' => 'nullable|mimes:png,jpg,jpeg' ,
                'status'  => 'required'
            ];
        }
    }
}
