<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Parcours;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $parcours = Parcours::count();

        $city = City::count();

        $bannedUsersCount = User::where('status', 'ban')->count();

        $unbannedUsersCount = User::where('status', 'unban')->count();

        return view('pages.dashboard', compact('parcours', 'city', 'bannedUsersCount', 'unbannedUsersCount'));
    }


    public function table()
    {
        $users = User::all();

        return view('pages.table', compact('users'));
    }

    public function toggleStatus(User $user)
    {
        if ($user->status === 'ban') {
            $user->update(['status' => 'unban']);
            $message = 'User unbanned successfully';
        } else {
            $user->update(['status' => 'ban']);
            $message = 'User banned successfully';
        }

        return redirect()->back()->with('message', $message);
    }


    public function reservation(){

        return view('pages.reservation');
    }


}
