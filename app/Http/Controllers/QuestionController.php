<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Questionnaire $questionnaire)
    {
        return view('back.question.create',compact('questionnaire'));
    }
}
