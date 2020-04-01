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

    public function store(CreateQuestionnaireRequest $request)
    {

        $date=$this->getShamsi($request->input('date-exam'),$request->input('start-exam'));


        $questionnaire=Questionnaire::create([
            'title'=>$request->input('title'),
            'grade'=>$request->input('grade'),
            'user_id'=>auth()->user()->id,
            'date-exam'=>$date,
            'start-exam'=>$request->input('start-exam'),
            'end-exam'=>$request->input('time-exam'),
        ]);



        if ($questionnaire) {
            return redirect(route('questionnaire.index',auth()->user()->name));
        }
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

    public function getShamsi($dateJalai,$startExam)
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        //$arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١','٠'];
        $num = range(0, 9);
        $convert = str_replace($persian, $num, $dateJalai);
        $date = explode('/', $convert);
        $gerGorian=Verta::getGregorian($date[0],$date[1],$date[2]);
        $newGre=implode($gerGorian);

        return date('Y-m-d',strtotime($newGre)).' '.$startExam.':00';
}


}
