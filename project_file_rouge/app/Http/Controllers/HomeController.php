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
        $searchQuery = $request->input('query');
        $departId = $request->input('depart_id');
        $arriveId = $request->input('arrive_id');
        $premierClass = $request->input('premier_class');
        $deuxiemeclass = $request->input('deuxieme_class');
        $depart_date = $request->input('depart_date');
        $cities = City::all();
        $parcours = Parcours::query()->with('City_depart', 'City_arrive');

        if ($searchQuery) {
            $parcours->where(function ($query) use ($searchQuery) {
                $query->where('title', 'LIKE', '%' . $searchQuery . '%')
                    ->orWhereHas('City_depart', function ($query) use ($searchQuery) {
                        $query->where('name', 'LIKE', '%' . $searchQuery . '%');
                    })
                    ->orWhereHas('City_arrive', function ($query) use ($searchQuery) {
                        $query->where('name', 'LIKE', '%' . $searchQuery . '%');
                    });
            });
        }


        if ($premierClass) {
            $parcours->where('classes', $premierClass);
        }

        if ($deuxiemeclass) {
            $parcours->where('classes', $deuxiemeclass);
        }

        if ($departId) {
            $parcours->where('depart_id', $departId);
        }

        if ($arriveId) {
            $parcours->where('arrive_id', $arriveId);
        }

        if ($depart_date) {
            $parcours->whereDate('depart_date', $depart_date);
        }

        $parcours = $parcours->get();


        return view('pages.ticket', compact('parcours', 'cities'));
    }



}
