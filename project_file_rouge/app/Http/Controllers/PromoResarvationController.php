<?php

namespace App\Http\Controllers;

use App\Models\Parcours;
use App\Models\PromoResarvation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PromoResarvationController extends Controller
{
    public function index()
    {
        $reservation = PromoResarvation::all();

        return view('pages.reservations', compact('reservation'));
    }

    public function store(Request $request, Parcours $parcours)
    {
/*        dd($request->query('classes'));*/

        $reserv=  PromoResarvation::create([
            'promo_id' => $parcours->id,
            'user_id' => Auth::id(),
            'classes' => $request->query('classes'),
            'number_de_reservation' => $request->query('number_of_reservations'),
            'date' => $request->query('date'),
        ]);

        if($reserv){
            $parcours->nbr_place -= $request->query('number_of_reservations');

            $parcours->save();
        }


        return redirect()->route('ticket.Promos')->with('success', 'Reservation created successfully.');
    }
}
