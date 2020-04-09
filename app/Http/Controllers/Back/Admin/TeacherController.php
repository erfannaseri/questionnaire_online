<?php

namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers=User::where('role',3)->get();

        return view('back.panels.admin.teacher.all-teachers',compact('teachers'));
    }
}
