<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
/*use App\Providers\RouteServiceProvider;*/
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Auth.register");
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required|min:3',
            "email" => ['required', 'email', 'unique:users,email'],
            "password" => 'required|min:6'
        ]);

        // Default role is 'user'
        $role = 'user';

        // Determine the role based on the checkbox value
        if ($request->has('admin')) {
            $role = 'admin';
        }

        // Create a new user record
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // Assign the role to the user
        $user->role = $role;
        $user->save();

        // Log in the user
        Auth::login($user);

        // Redirect the user based on their role
        if ($role === 'user') {
            // Redirect users to a specific route if needed
        } elseif ($role === 'admin') {
            // Redirect admins to a specific route if needed
        }

        return redirect('login');
    }


}
