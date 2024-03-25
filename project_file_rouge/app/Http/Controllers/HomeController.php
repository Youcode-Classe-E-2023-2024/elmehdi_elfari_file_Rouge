<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Parcours;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){

        $parcours = Parcours::with('City_depart','City_arrive')->get();
        $cities = City::all();
        return view('pages.welcome', compact('parcours','cities'));
    }

}
