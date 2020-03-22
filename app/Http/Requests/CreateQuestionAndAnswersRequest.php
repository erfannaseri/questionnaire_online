<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuestionAndAnswersRequest extends FormRequest
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
            'question.question'=>'required',
            'answers.*.answer'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'question.question.required'=>'لطفا سوال خود را بنویسید',
            'answers.*.answer.required'=>"جواب گزینه را بادقت مرور نمایید"
        ];
    }
}
