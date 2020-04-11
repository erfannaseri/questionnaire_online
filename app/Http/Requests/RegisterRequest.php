<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'bail|required|alpha_spaces|min:4',
            'username' => 'bail|required|string|min:5|unique:users',
            'email' => 'bail|required|string|email|unique:users',
            'password' => 'bail|required|string|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'لطفا نام خود را وارد نمایید',
            'name.alpha_spaces'=>'فقط از حروف استفاده نمایید مانند: سید دانیال معین آل داوود',
            'name.min'=>'نام وارد شده بسیار کوتاه است',
            'username.required'=>'لطفا نام کاربری خود را وارد نمایید',
            'username.string'=>'فرمت نام کاربری اشتباه است مثال : lampard',
            'username.min'=>'نام کاربری شما باید حداقل 6 حرفی باشد',
            'username.unique'=>'نام کاربری قبلا ثبت شده است',
            'email.required'=>'لطفا ایمیل خود را وارد نمایید',
            'email.string'=>'برای ایمیل از حروف و اعداد استفاده نمایید',
            'email.email'=>'فرمت ایمیل وارد شده درست نیست ',
            'email.unique'=>'ایمیل مورد نظر شما قبلا ثبت شده است',
            'password.required'=>'لطفا رمزعبور خود را وارد نمایید',
            'password.string'=>'رمزعبور باید ترکیبی از اعداد و حروف باشد',
            'password.min'=>'رمزعبور وارد شده بسیار کوتاه  است',
            'password.confirmed'=>'رمزعبور ها منطبق نیستند',
        ];
    }
}
