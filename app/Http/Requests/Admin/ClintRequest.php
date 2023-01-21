<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ClintRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

            return [
                'job_ar' => 'required' ,
                'job_en' => 'required' ,

                'desc_ar' => 'required' ,
                'desc_en' => 'required' ,

                'name' => 'required' ,
                'img' => $this->method() == "POST" ? 'required|mimes:png,jpg,jpeg' : 'nullable|mimes:png,jpg,jpeg' ,
            ];

    }
}
