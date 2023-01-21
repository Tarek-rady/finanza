<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

          'twitter' => 'required' ,
          'facebook' => 'required' ,
          'instagram' => 'required' ,
          'youtube' => 'required' ,
          'linkedin' => 'required' ,
          'phone' => 'required' ,
          'gmail' => 'required|email' ,
          'start_time' => 'required' ,
          'end_time' => 'required' ,
          'location' => 'required' ,
        ];
    }
}
