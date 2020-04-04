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
        $charts=Questionnaire::paginate(5);
        return view('front.chart',compact('charts'));
    }

    public function chartTomorrow()
    {
       $charts=Questionnaire::whereBetween('dateExam',[Carbon::now(),Carbon::now()->addDay(1)])->paginate(3);

       return view('front.chartTomorrow',compact('charts'));
    }

    public function chartToday()
    {
        $charts=Questionnaire::whereBetween('dateExam',[Carbon::today(),Carbon::today()->addHour(18)])->paginate(3);


        return view('front.chartToDAy',compact('charts'));
    }
}
