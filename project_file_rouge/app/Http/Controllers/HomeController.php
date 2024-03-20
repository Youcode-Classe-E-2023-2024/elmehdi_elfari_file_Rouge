<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){

        $cities = City::all();
        return view('pages.welcome' ,compact('cities'));
    }

}
