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
}
