<?php

namespace App\Http\Controllers;

use App\Models\Promos;
use Carbon\Carbon;
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
        $currentDateTime = Carbon::now();

        $departId = $request->input('depart_id');
        $arriveId = $request->input('arrive_id');
        $depart_date = $request->input('depart_date');
        $cities = City::all();
        $parcour = Parcours::query()->with('City_depart', 'City_arrive');

        if ($departId) {
            $parcour->whereHas('City_depart', function ($query) use ($departId) {
                        $query->where('id', 'LIKE', '%' . $departId . '%');
                    });

        }elseif ($arriveId){
            $parcour->WhereHas('City_arrive', function ($query) use ($arriveId) {
                $query->where('id', 'LIKE', '%' . $arriveId . '%');
            });
        }else {
            $parcour->where('depart_date', $depart_date);
        }
        $parcours = $parcour->where('depart_date' , '>=', now())->get();

        return view('pages.ticket', compact('parcours', 'cities'));
    }

    public function searchTicket(Request $request)

    {
        $currentDateTime = Carbon::now();

        $departId = $request->input('depart_id');
        $arriveId = $request->input('arrive_id');
        $depart_date = $request->input('depart_date');
        $cities = City::all();
        $promo = Promos::query()->with('City_depart', 'City_arrive');

        if ($departId) {
            $promo->whereHas('City_depart', function ($query) use ($departId) {
                $query->where('id', 'LIKE', '%' . $departId . '%');
            });

        }elseif ($arriveId){
            $promo->WhereHas('City_arrive', function ($query) use ($arriveId) {
                $query->where('id', 'LIKE', '%' . $arriveId . '%');
            });
        }else {
            $promo->where('depart_date', $depart_date)->get();
        }
        $Promos = $promo->where('depart_date' , '>=', now())->get();

        return view('pages.ticketPromo', compact('Promos', 'cities'));
    }

}
