<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Http\Requests\CreateQuestionAndAnswersRequest;
use App\Http\Requests\CreateQuestionnaireRequest;
use App\Question;
use App\Questionnaire;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    public function create(Questionnaire $questionnaire)
    {
        return view('back.question.create',compact('questionnaire'));
    }

    public function store(Request $request,Questionnaire $questionnaire)
    {
//چون ووردی به صورت ارایه می باشد پس بهتر است از روش زیر استفاده شود چون با روش اولیه ایجاد داده پیچیده میشود//

       //نکته مهم دیگر این است که چون از طریق ارتباط بین جداول ادد کرده ایم پس میبایست  استفاده کرد از massAsighment


    $question=$questionnaire->questions()->create($request['question']);
    $question->correctAnswer()->create($request['correctAnswer']);
    $question->answers()->createMany($request['answers']);


        return redirect(route('questionnaire.show',$questionnaire->title));
    }

    public function destroy(Questionnaire $questionnaire,Question $question)
    {
        $question->answers()->delete();

        $question->delete();

        return back()->with('deleteQuestionSuccess','عملیات حذف با موفقیت انجام شد');
    }
}

