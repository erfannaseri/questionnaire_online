<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuestionnaireRequest extends FormRequest
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
            'title'=>'bail|required|unique:questionnaires',
            'grade'=>'bail|required',
            'date-exam'=>'required',
            'time-exam'=>'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'عنوان این این پرسشنامه را وارد نمایید',
            'grade.required'=>'کاربرد این پرسشنامه را بنویسید',
            'date-exam.required'=>'تاریخ برگزاری را انتحاب نکردی',
            'time-exam.required'=>'زمان لازم برای این ازمون را وارد نماییید',
            'time-exam.integer'=>'زمان لازم فقط عددی باشد مثال 100',
        ];
    }
}
