<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccessRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'firstname'=>'required|min:3',
            'lastname'=> 'required|min:3',
            'email' => 'required|email|unique:users',
            'password'=>'required|min:3'
        ];
    }
}
