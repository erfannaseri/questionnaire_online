<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSurveyRequset;
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

    public function store(CreateSurveyRequset $requset,$id,$slug)
    {

        $questionnaire=Questionnaire::find($id);

//        $survey=$questionnaire->surveys()->create($data['survey']);
//
//        $survey->response()->createMany($data['response']);

       return $data;
    }
}
