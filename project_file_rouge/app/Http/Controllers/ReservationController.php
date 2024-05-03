<?php

namespace App\Http\Controllers;

use App\Models\Parcours;
use App\Models\Reservation;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();

        return view('pages.reservation', compact('reservations'));
    }

    public function store(Request $request, Parcours $parcours)
    {
        $user = Auth::user();
        /*dd($request->query('classes'));*/
        $reservations = Reservation::create([
            'parcour_id' => $parcours->id,
            'user_id' => Auth::id(),
            'classes' => $request->query('classes'),
            'number_de_reservation' => $request->query('number_of_reservations'),
            'date' => $request->query('date'),
            'price' => $request->query('price'),
        ]);

        if ($reservations) {
            $parcours->nbr_place -= $request->query('number_of_reservations');
            $parcours->save();
            Mail::send('Mail.ticketMail', ['reservations' => $reservations,'client'=>$user], function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Ticket ge Reservation');
            });
        }

        return redirect()->route('ticket')->with('success', 'Reservation created successfully.');

    }




}
