<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Employe extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'id'=>'numeric',
          'namefamil'=>'required|string',
          'kodemeli'=>'required|numeric',
          'madrak'=>'required|string',
           'reshte'=>'required|string',
           'univercity'=>'required|string',
           'tavalod'=>'required|string',
           'mobile'=>'required|numeric',
            'tel'=>'required|numeric',
           'email'=>'required|string',
           'comment'=>'nullable|string',
            'image'=>'nullable|string',
        ];
    }
}
