<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
/*********************** ADMIN ROUTES ******************************/
Route::group(['prefix'=>'admin','middleware'=>'checkAdmin'] ,function (){
   Route::get('/{user:name}','Back\AdminController@index')->name('admin.panel');
   Route::group(['prefix'=>'questionnaire'],function (){
       Route::get('/all','Back\QuestionnaireController@allQuestionnaire')->name('questionnaire.all');
       Route::get('questionnaires/{questionnaire}','Back\QuestionnaireController@show')->name('questionnaire.show');
   });
    Route::group(['prefix'=>'student'],function (){
        Route::get('/all','Back\StudentController@allStudent')->name('student.all');
        Route::get('/{user:name}','Back\StudentController@show')->name('student.show');
    });
    Route::group(['prefix'=>'course'],function (){
        Route::get('/all','Back\CourseController@index')->name('course.all');
        Route::get('create','Back\CourseController@showFormCreateCourse')->name('course.create');
        Route::post('','Back\CourseController@store')->name('course.store');
    });
});

/*********************** STUDENT ROUTES ******************************/
Route::group(['prefix'=>'student','middleware'=>'checkStudent'] ,function (){
    Route::get('/{user:name}','Back\StudentController@index')->name('student.panel');
});

/*********************** TEACHER ROUTES ******************************/
Route::group(['prefix'=>'teacher','middleware'=>'checkTeacher'] ,function (){
    Route::get('/{user:name}','Back\TeacherController@index')->name('teacher.panel');
});


/*********************** FRONT ROUTES ********************************/
Route::group(['namespace'=>'front'],function(){
    Route::get('/', function () {
        return view('front.home');
    });
    //Route::get('chart','QuestionnaireController@index')->name('questionnaire.all');
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
