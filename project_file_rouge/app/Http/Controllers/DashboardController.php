<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $cities = City::count();
        return view('pages.dashboard' ,compact('cities'));
    }

    public function table(){

        return view('pages.table');
    }

    public function reservation(){

        return view('pages.reservation');
    }


}
