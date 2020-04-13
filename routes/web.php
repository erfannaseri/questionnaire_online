<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
/*********************** ADMIN ROUTES ******************************/
Route::group(['prefix'=>'admin','middleware'=>'checkAdmin','namespace'=>'Back\Admin'] ,function (){
   Route::get('/home','AdminController@index')->name('admin.panel');
   Route::group(['prefix'=>'questionnaire'],function (){
       Route::get('/all','QuestionnaireController@allQuestionnaire')->name('questionnaire.all');
       Route::get('questionnaires/{questionnaire}','QuestionnaireController@show')->name('questionnaire.show');
   });
    Route::group(['prefix'=>'student'],function (){
        Route::get('/all','StudentController@index')->name('student.all');
        Route::delete('/{user:username}','StudentController@destroy')->name('student.destroy');
    });

    Route::group(['prefix'=>'teacher'],function (){
        Route::get('/all','TeacherController@index')->name('teacher.all');
        Route::get('/create','TeacherController@showFormCreateTeacher')->name('teacher.create');
        Route::post('/','TeacherController@store')->name('teacher.store');
        Route::get('/{user:name}/edit','TeacherController@showFormEditTeacher')->name('teacher.edit');
        Route::put('/{user:name}','TeacherController@update')->name('teacher.update');
        Route::delete('/{user:name}','TeacherController@destroy')->name('teacher.destroy');
    });
    Route::group(['prefix'=>'course'],function (){
        Route::get('/all','CourseController@index')->name('course.all');
        Route::get('create','CourseController@showFormCreateCourse')->name('course.create');
        Route::post('','CourseController@store')->name('course.store');
        Route::get('/{course}/edit','CourseController@showFormEditCourse')->name('course.edit');
        Route::put('/{course}','CourseController@update')->name('course.update');
        Route::delete('/{course}','CourseController@destroy')->name('course.destroy');
    });
});
/*********************** TEACHER ROUTES ******************************/
Route::group(['prefix'=>'teacher','middleware'=>'checkTeacher','namespace'=>'Back'] ,function (){
    Route::get('/home','TeacherController@index')->name('teacher.panel');
});

/*********************** STUDENT ROUTES ******************************/
Route::group(['prefix'=>'student','middleware'=>'checkStudent','namespace'=>'Back\Admin'] ,function (){
    Route::get('/home','StudentController@index')->name('student.panel');
});

/*************************** OTHER ROUTE *****************************/

Route::get('error-404',function (){
    return view('errors.404');
})->name('error-404');
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
