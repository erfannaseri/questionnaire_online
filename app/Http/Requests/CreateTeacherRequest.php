<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeacherRequest extends FormRequest
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
            'name'=>'bail|required|alpha_spaces|min:5',
            'email'=>'bail|required|email|unique:users',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'لطفا نام معلم را وارد نمایید',
            'name.alpha_spaces'=>'نام معلم فقط ترکیبی ار حروف باشد مانند تیلور اوتول',
            'name.min'=>'نام وارد شده بسیار کوتاه است حداقل 5 حرفی باشد',
            'email.required'=>'لطفا ایمیل معلم را وارد نمایید',
            'email.email'=>'فرمت ایمیل وارد شده درست نمیباشد',
            'email.unique'=>'ایمیل قبلا ثبت شده است لطفا ایمیل دیگری را امتحان نمایید',
        ];
    }
}
