<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
class CourseController extends Controller
{
    public function index()
    {
        $courses=Course::all();
        return view('back.panels.admin.course.all-course',compact('courses'));
    }

    public function showFormCreateCourse()
    {
        return view('back.panels.admin.course.create-course');
    }
}
