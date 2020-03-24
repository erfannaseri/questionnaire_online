<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSurveyRequset extends FormRequest
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
            'response.*.answer_id'=>'required',
            'response.*.question_id'=>'required',
            'survey.name'=>'required',
            'survey.email'=>'required|email',
        ];
    }

    public function messages()
    {
        return [
            'response.*.answer_id.required'=>'هیچ گزینه ای رو وارد نکردی',
            'survey.name.required'=>'فیلد نام را تکمیل نمایید',
            'survey.email.required'=>'ایمیل را وارد نمایید',
            'survey.email.email'=>'لطفا فرمت ایمیل را بدرستی وارد نمایید',
        ];
    }

}
