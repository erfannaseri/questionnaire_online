<?php

namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateTeacherRequest;
use Illuminate\Support\Facades\Notification;

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
                'username'=>$request->username,
                'email'=>$request->email,
                'role'=>$request->role,
                'password'=>Hash::make(12345678)
            ]);
            $user->role=3;
            $user->save();
            notification::send(new SendRegisteredTeacher($user));
                return redirect(route('teacher.all'))->with('successAddTeacher','معلم جدید با موفقیت اضافه شد ');
        }
        return redirect(route('teacher.all'))->with('brokenAddTeacher','عملیات ثبت معلم با شکست روبرو شد');
    }

    public function showFormEditTeacher(User $user){
        $teacher=$user;
        return view('back.panels.admin.teacher.edit-teacher',compact('teacher'));
    }
}
