<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class googleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            $socialUser = Socialite::driver('google')->user();

            $user = User::updateOrCreate([
                'email' => $socialUser->getEmail(),
            ], [
                'name' => $socialUser->getName(),
                'google_id' => $socialUser->getId(),
            ]);

            Auth::login($user);
            return redirect()->intended('home');

        } catch (\Throwable $th) {
            dd("something went wrong! " . $th->getMessage());
        }
    }

}
