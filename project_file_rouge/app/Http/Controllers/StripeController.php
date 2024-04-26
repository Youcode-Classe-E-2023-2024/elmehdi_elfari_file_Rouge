<?php

namespace App\Http\Controllers;

use App\Models\Parcours;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('pages.ticket');
    }

    public function createSession(Request $request)
    {
        $parcours = Parcours::all();
        $totalAmount = 0;
        foreach ($parcours as $parcour) {
            $totalAmount += $parcour->Prix_Parcour;
        }
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'gimme money!!!!',
                        ],
                        'unit_amount' => $totalAmount * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        return "Yay, It works!!!";
    }
}
