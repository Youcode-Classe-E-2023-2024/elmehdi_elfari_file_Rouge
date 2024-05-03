<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\City;
use App\Models\Parcours;
use App\Models\Promos;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('pages.ticket');
    }

    public function createSession(Request $request, Parcours $parcours)
    {
        $reservation = Reservation::where('parcour_id', $parcours->id)
            ->where('user_id', Auth::id())
            ->where('date', $request->date)
            ->first();

        if ($reservation) {
            return redirect()->back()->with('error', 'error');
        }

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $totalPriceInCents = $request->price * 100;

        // Create the Stripe Checkout session
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Réservation pour ' . $parcours->City_depart->name . ' à ' . $parcours->City_arrive->name,
                        ],
                        'unit_amount' => $totalPriceInCents,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('Reservation', ['parcours' => $parcours->id, 'classes' => $request->Classes, 'number_of_reservations' => $request->number_of_reservations, 'date' => $request->date, 'price' => $totalPriceInCents]),
            'cancel_url' => route('checkout'),
        ]);

        // Send reservation email


        // Redirect the user to the Stripe session URL
        return redirect()->away($session->url);
    }


    public function success()
    {

        return view('pages.success');

    }

}
