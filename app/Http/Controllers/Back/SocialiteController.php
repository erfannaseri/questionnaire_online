<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Socialite;
use App\User;
use Exception;
class SocialiteController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    public function handleProviderCallback($provider)
    {


            $user = Socialite::driver($provider)->stateless()->user();

            $existUser=User::where('provider_id',$user->id)->first();

            if ($existUser) {
                Auth::login($existUser);
                return redirect(route('login'));
            } else {
                $newUser=User::create([
                    'name'=>$user->name,
                    'email'=>$user->email,
                    'avatar'=>$user->avatar,
                    'provider_id'=>$user->id,
                    'password'=>Hash::make(12345678)
                ]);
                Auth::login($newUser);
                return redirect(route('login'));
            }
    }
}
