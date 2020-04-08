<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class StudentController extends Controller
{
    public function index()
    {
        return view('back.panels.student.student');
    }

    public function allStudent()
    {
        $students=User::where('role',2)->get();

        return view('back.panels.admin.student.all-student',compact('students'));
    }
}
