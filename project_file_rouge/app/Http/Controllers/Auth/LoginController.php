<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{

    public function create()
    {
        return view("Auth.login");
    }

    function authenticate(Request $request)
    {
        $formFields = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);

        if (auth()->attempt($formFields, $request->filled('remember'))) {
            $request->session()->regenerate();
            $user = User::where('id', Auth::id())->first();

            if ($user->status === 'ban') {
                Auth::logout();

                return redirect()->route('login')->with('error', 'Your email is banned.');
            }

            if ($user->role === 'admin') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home');
            }
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])
            ->onlyInput();
    }
}
