<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tiendarequest extends FormRequest
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
            'name'=>'required|min:2|max:20',
            'email'=>'required|email',
            'password'=>'required|min:8|max:10|regex:/[0-9]/',
            'likes'=>'required||min:1',
        ];
    }
}
