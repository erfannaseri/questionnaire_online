<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuestionnaireRequest;
use App\Questionnaire;
use App\User;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
class QuestionnaireController extends Controller
{
    public function index(User $user)
    {
        $questionnaires=$user->questionnaires;
        return view('back.questionnaire.index',compact('questionnaires'));
    }

    public function create()
    {
        return view('back.questionnaire.create');
    }

    public function store(Request $request)
    {


//        $questionnaire=Questionnaire::create([
//            'title'=>$request->title,
//            'purpose'=>$request->purpose,
//            'user_id'=>auth()->user()->id,
//        ]);

        $date=$this->getDate($request->input('date-exam'));
        $gregorian=explode('-',implode(Verta::getGregorian($date[0],$date[1],$date[2])));
        return $date;
//        if ($questionnaire) {
//            return redirect(route('questionnaire.index',auth()->user()->name));
//        }
    }

    public function show(Questionnaire $questionnaire)
    {
        /**
         * eager loading with relationship
         */


       $questionnaire->load('questions.answers.responses');
       //چون با جدولquestion ارتباط دارد و جدول question نیز با answers ارتبتاط دارد//

        return view('back.questionnaire.show',compact('questionnaire'));
    }

    public function getDate($dateJalai)
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        //$arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١','٠'];
        $num = range(0, 9);
        $convert = str_replace($persian, $num, $dateJalai);
        $newDate = explode('/', $convert);

        return $newDate;
}
}
