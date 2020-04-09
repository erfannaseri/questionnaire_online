<?php

namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateTeacherRequest;
class TeacherController extends Controller
{
    public function index()
    {
        $teachers=User::where('role',3)->get();

        return view('back.panels.admin.teacher.all-teachers',compact('teachers'));
    }

    public function showFormCreateTeacher()
    {
        return view('back.panels.admin.teacher.create-teacher');
    }

    public function store(CreateTeacherRequest $request)
    {
        if ($request->role == 3) {
            $user=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'role'=>$request->role,
                'password'=>Hash::make($request->password)
            ]);
            $user->role=3;
            $user->save();
                return redirect(route('teacher.all'))->with('successAddTeacher','معلم جدید با موفقیت اضافه شد ');
        }
        return redirect(route('teacher.all'))->with('brokenAddTeacher','عملیات ثبت معلم با شکست روبرو شد');
    }
}
