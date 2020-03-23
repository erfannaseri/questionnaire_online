<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function show($id,$slug)
    {
        $questionnaire=Questionnaire::find($id);
        $questionnaire->load('questions.answers');
        return view('back.surveys.show',compact('questionnaire'));
    }

    public function store($id,$slug)
    {
        $data=request()->validate([
            'response.*.answer_id'=>'required',
            'response.*.question_id'=>'required'
        ]);

        dd($data);
    }
}
