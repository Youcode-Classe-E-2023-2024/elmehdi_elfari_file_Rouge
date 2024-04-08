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

        return view('pages.welcome', compact( 'parcours', 'cities'));
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('query');
        $departId = $request->input('depart_id');
        $arriveId = $request->input('arrive_id');

        $cities = City::all();

        $parcours = Parcours::query();

        if ($searchQuery) {
            $parcours->where(function($query) use ($searchQuery) {
                $query->where('title', 'LIKE', '%' . $searchQuery . '%')
                    ->orWhereHas('City_depart', function($query) use ($searchQuery) {
                        $query->where('name', 'LIKE', '%' . $searchQuery . '%');
                    })
                    ->orWhereHas('City_arrive', function($query) use ($searchQuery) {
                        $query->where('name', 'LIKE', '%' . $searchQuery . '%');
                    });
            });
        }

        if ($departId) {
            $parcours->where('depart_id', $departId);
        }

        if ($arriveId) {
            $parcours->where('arrive_id', $arriveId);
        }

        $parcours = $parcours->with('City_depart', 'City_arrive')->paginate(6);

        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $cities = City::all();

        $parcours = Parcours::where('created_at', '>=', $start_date)->get();


        return view('pages.welcome', compact('parcours', 'cities'));
    }


}
