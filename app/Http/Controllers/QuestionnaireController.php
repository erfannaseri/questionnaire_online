<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuestionnaireRequest;
use App\Questionnaire;
use App\User;
use Illuminate\Http\Request;

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
        $questionnaire=Questionnaire::create([
            'title'=>$request->title,
            'purpose'=>$request->purpose,
            'user_id'=>auth()->user()->id,
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


       $questionnaire->load('questions.answers');
       //چون با جدولquestion ارتباط دارد و جدول question نیز با answers ارتبتاط دارد//

        return view('back.questionnaire.show',compact('questionnaire'));
    }
}
