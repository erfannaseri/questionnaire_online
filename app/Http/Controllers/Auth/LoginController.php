<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }


    public function login(LoginRequest $request)
    {

       $result=Auth::attempt(['email'=>$request->email,'password'=>$request->password]);

        if ($result) {

            $user=User::where('email',$request->email)->first();

            if ($user->role == 1) {
                return redirect(route('admin.panel'));
            }
            if ($user->role == 2) {
                return redirect(route('student.panel'));
            }
            if ($user->role == 3) {
                return redirect(route('teacher.panel'));
            }
        }
    }

}
