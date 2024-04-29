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
        // Validate the incoming request data
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

        // Assign the role to the user and save the user
        $user->role = $role;
        $user->save();

        // Redirect the user to the login page
        return redirect()->route('register')->with('success', 'Registration successful! Please log in.');
    }


}
