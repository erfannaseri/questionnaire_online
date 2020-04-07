<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|string',
            'password' => 'required|string',
            'g-recaptcha-response' => 'recaptcha'
        ];

    }

    public function messages()
    {
        return [
            'email.required'=>'ایمیل را وارد نمایید',
            'email.string'=>'فرمت اسمسل وارد شده نادرست است',
            'password.required'=>'اسمسل را وارد نمایید',
            'password.string'=>'فرمت را وارد نمایید',
        ];
    }
}
