<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Parcours;
use App\Models\User;

class HomeController extends Controller
{
    public function welcome()
    {
        $cities = City::all();
        $parcours = Parcours::with('City_depart', 'City_arrive')->get();

        return view('pages.home', compact('parcours', 'cities'));
    }

    public function search(Request $request)
    {
        $departId = $request->input('depart_id');
        $arriveId = $request->input('arrive_id');
        $depart_date = $request->input('depart_date');
        $arrive_date = $request->input('arrive_date');

        $cities = City::all();
        $parcours = Parcours::query()->with('City_depart', 'City_arrive');

        if ($departId) {
            $parcours->where('depart_id', $departId);
        }

        if ($arriveId) {
            $parcours->where('arrive_id', $arriveId);
        }

        $parcours->whereDate('depart_date', $depart_date);

        $parcours = $parcours->get();

        return view('pages.home', compact('parcours', 'cities'));
    }
}
