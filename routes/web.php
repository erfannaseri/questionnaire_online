<?php



Auth::routes();
Route::get('/', function () {
    return view('front.home');
});

Route::get('/questionnaire/show','front\QuestionnaireController@index')->name('questionnaire.all');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('questionnaire/create','QuestionnaireController@create')->name('questionnaire.create')->middleware('auth');
Route::post('questionnaires','QuestionnaireController@store')->name('questionnaire.store');
Route::get('/{user}/questionnaires','QuestionnaireController@index')->name('questionnaire.index');
Route::get('questionnaires/{questionnaire}','QuestionnaireController@show')->name('questionnaire.show')->middleware('auth');

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


Route::view('test','front/index');
