<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Parcours;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $parcours = Parcours::count();
        $city = City::count();
        return view('pages.dashboard' ,compact('parcours','city'));
    }

    public function table(){

        return view('pages.table');
    }

    public function reservation(){

        return view('pages.reservation');
    }


}
