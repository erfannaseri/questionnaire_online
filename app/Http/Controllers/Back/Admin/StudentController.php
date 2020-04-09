<?php

namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class StudentController extends Controller
{


    public function index()
    {
        $students=User::where('role',2)->get();

        return view('back.panels.admin.student.all-student',compact('students'));
    }

    public function show(User $user)
    {

    }
}
