<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('questionnaire/create','QuestionnaireController@create')->name('questionnaire.create')->middleware('auth');
Route::post('questionnaires','QuestionnaireController@store')->name('questionnaire.store');
Route::get('/{user}/questionnaires','QuestionnaireController@index')->name('questionnaire.index');
Route::get('questionnaires/{questionnaire}','QuestionnaireController@show')->name('questionnaire.show');


Route::get('questionnaire/{questionnaire}/question/create','QuestionController@create')
    ->name('question.create')->middleware('auth');
