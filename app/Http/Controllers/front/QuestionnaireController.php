<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Questionnaire;
use Carbon\Carbon;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{

    public function index()
    {
        $charts=Questionnaire::paginate(1);
        return view('front.chart',compact('charts'));
    }

    public function chartToDay()
    {


       $exams=Questionnaire::whereBetween('id',[Carbon::now(),Carbon::now()->addDay(1)])->get();

       return $exams;
    }
}
