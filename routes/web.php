<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'checkAdmin'] ,function (){
   Route::get('/{user:name}','Back\AdminController@index')->name('admin.panel');
   Route::group(['prefix'=>'questionnaire'],function (){
       Route::get('/csd','Back\QuestionnaireController@index')->name('questionnaire.index');
       Route::get('questionnaires/{questionnaire}','Back\QuestionnaireController@show')->name('questionnaire.show');
   });

});

Route::group(['prefix'=>'student','middleware'=>'checkStudent'] ,function (){
    Route::get('/{user:name}','Back\StudentController@index')->name('student.panel');
});

Route::group(['prefix'=>'teacher','middleware'=>'checkTeacher'] ,function (){
    Route::get('/{user:name}','Back\TeacherController@index')->name('teacher.panel');
});

Route::group(['namespace'=>'front'],function(){
    Route::get('/', function () {
        return view('front.home');
    });
    Route::get('chart','QuestionnaireController@index')->name('questionnaire.all');
    Route::get('chartTomorrow','QuestionnaireController@chartTomorrow')->name('questionnaire.tomorrow');
    Route::get('chartToDay','QuestionnaireController@chartToday')->name('questionnaire.today');
});



Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth','prefix'=>'questionnaires'],function (){
    Route::get('/{questionnaire}/questions/create','QuestionController@create')
        ->name('questions.create');
    Route::post('/{questionnaire}/questions','QuestionController@store')
        ->name('questions.store');
    Route::delete('/{questionnaire}/questions/{question}','QuestionController@destroy')
        ->name('questions.delete');
});

Route::get('surveys/{id}-{slug}','SurveyController@show')->middleware('auth');
Route::post('surveys/{id}-{slug}','SurveyController@store')->middleware('auth');
