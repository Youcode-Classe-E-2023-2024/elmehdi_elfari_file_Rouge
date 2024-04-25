<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Parcours;
use App\Models\Promos;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function ticket()
    {
        $cities = City::all();
        $parcours = Parcours::with('City_depart', 'City_arrive')->get();

        return view('pages.ticket', compact('parcours', 'cities'));
    }

    public function ticketPromos($id)
    {
        $Promo = Promos::with('City_depart', 'City_arrive')->findOrFail($id);
        $cities = City::all();
        return view('pages.ticketPromo', compact('Promo', 'cities',));
    }


}
