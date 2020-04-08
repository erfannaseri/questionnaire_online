<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourseRequest extends FormRequest
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
            'title'=>'bail|required|alpha_spaces|min:3',
            'grade'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'نام درس را وارد نمایید',
            'title.alpha_spaces'=>'english نام درس فقط باید رشته باید مانند : تاریخ یا  ',
            'title.min'=>'نام درس وارد شده بسیار کوتاه است دست کم باید سه حرفی باشد مانند : هنر',
            'grade.required'=>'پایه تحصیلی را وارد نمایید',
        ];
    }
}
