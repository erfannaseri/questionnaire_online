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

        $dateGregorian=$this->getShamsi($request->input('date-exam'),$request->input('start-exam'));


        $timeEndExam=$this->getTimeExam($request->input('date-exam'),$request->input('start-exam'),$request->input('time-exam'));

        $questionnaire=Questionnaire::create([
            'title'=>$request->input('title'),
            'grade'=>$request->input('grade'),
            'user_id'=>auth()->user()->id,
            'date-exam'=>$dateGregorian,
            'start-exam'=>$request->input('start-exam'),
            'end-exam'=>$timeEndExam,
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

    public function getTimeExam($dateJalai,$start,$end)
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        //$arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١','٠'];
        $num = range(0, 9);
        $convert = str_replace($persian, $num, $dateJalai);
        $date = explode('/', $convert);
        $gerGorian=Verta::getGregorian($date[0],$date[1],$date[2]);
        $time= date('Y-m-d',strtotime(implode($gerGorian)));

        if ($end >= 60)
        {
            $startExam=str_replace(':','',$start);

            $minute =$end-60;
            $endExam=($startExam+100)+$minute;


            if (substr($endExam,1,1) > 5) {
                $originalEndExam='0'.(($endExam-60)+100);
                 return $time.' '.substr($originalEndExam,0,2).':'.substr($originalEndExam,2);
            }else{
                return $time.' '.'0'.substr($endExam,0,1).':'.substr($endExam,1);
            }

        } else {
            $startExam=str_replace(':','',$start);
            $eExam=$startExam+$end;
            if (substr($eExam,1,1) > 5) {
                $originalEndExam='0'.(($eExam-60)+100);
                return $time.' '.substr($originalEndExam,0,2).':'.substr($originalEndExam,2);
            }else{
                return $time.' '.'0'.substr($eExam,0,1).':'.substr($eExam,1);
            }

        }


//        $houreMinute=(round($end/60,4));
//
////        $houre=intval($houreMinute);
////        $minute=ceil(($houreMinute-$houre)*60);
//

//        $nv= $v->addHour($houre);
//
//         return $nv->addMinute($minute);
    }


}
