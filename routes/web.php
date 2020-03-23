<?php




Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('questionnaire/create','QuestionnaireController@create')->name('questionnaire.create')->middleware('auth');
Route::post('questionnaires','QuestionnaireController@store')->name('questionnaire.store');
Route::get('/{user}/questionnaires','QuestionnaireController@index')->name('questionnaire.index');
Route::get('questionnaires/{questionnaire}','QuestionnaireController@show')->name('questionnaire.show')->middleware('auth');

Route::group(['middleware'=>'auth','prefix'=>'questionnaire'],function (){
    Route::get('/{questionnaire}/questions/create','QuestionController@create')
        ->name('questions.create');
    Route::post('/{questionnaire}/questions','QuestionController@store')
        ->name('questions.store');
});

Route::get('surveys/{id}-{slug}','SurveyController@show')->middleware('auth');//Route::post('surveys/{id}-{slug}','SurveyController@store')->middleware('auth');
