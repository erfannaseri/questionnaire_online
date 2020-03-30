<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{

    public function index()
    {
        $charts=Questionnaire::all();
        return view('front.chart',compact('charts'));
    }
}
