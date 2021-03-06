<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class Virayesh extends FormRequest
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
      $id=Request::input('id');
      return [
            'id'=>'numeric',
            'codemeli'=>'required|codemeli:estekhdams,codemeli,' . $id,
            'namefamil'=>'required|string',
            'madrak'=>'required|string',
             'reshteh'=>'required|string',
             'univercity'=>'required|string',
             'tavalod'=>'required|tavalod',
             'mobile'=>'required|mobile',
              'tel'=>'required|tel',
             'email' => 'required|email',
             'comment'=>'nullable|string',
             'image'=>'nullable|string',

        ];
    }
}
