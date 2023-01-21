<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

            return [
                'name' => 'required|max:255' ,
                'email' => 'required|email|unique:contact_us,email' ,
                'subject' => 'required|max:255' ,
                'phone'   => 'required|numeric|unique:contact_us,phone' ,
                'msg' => 'required' ,

            ];

    }
}
