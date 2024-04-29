<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Parcours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    /*public function store(Request $request)
    {
        // Retrieve authenticated user
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $request->validate([
            'arrive_time' => 'required|date_format:H:i',
            'Prix_Parcour' => 'required|numeric',
            'distance_Parcour' => 'required|numeric',
            'nbr_place' => 'required|integer',
            'depart_date' => 'required|date',
            'depart_id' => 'required|integer',
            'arrive_id' => 'required|integer',
            'time_depart' => 'required|date_format:H:i',
            'duree' => 'required|string',
        ]);

        $parcours = Parcours::create([
            'arrive_time' => $request->arrive_time,
            'Prix_Parcour' => $request->Prix_Parcour,
            'distance_Parcour' => $request->distance_Parcour,
            'nbr_place' => $request->nbr_place,
            'depart_date' => $request->depart_date,
            'depart_id' => $request->depart_id,
            'arrive_id' => $request->arrive_id,
            'time_depart' => $request->time_depart,
        ]);



// Send the email
        Mail::to($user->email)->send(new SendMail($parcours));

// Return the view with the parcours data
        return view('Mail.ticketMail', ['parcours' => $parcours])
            ->with(['message' => 'Email sent successfully!']);

    }*/
    public function store(Request $request)
    {

        $parcours = [];
        foreach ($request->input('parcours', []) as $product) {
            $parcours[] = Parcours::create([
                'arrive_id' => $product['arrive_id'],
                'distance_Parcour' => $product['distance_Parcour'],
                'Prix_Parcour' => $product['Prix_Parcour'],
                'nbr_place' => $product['nbr_place'],
                'time_depart' => $product['time_depart'],
                'arrive_time' => $product['arrive_time'],
                'depart_date' => $product['depart_date'],
                'duree' => $product['duree'],
            ]);
        }


        Mail::to(Auth::user()->email)->send(new SendMail($parcours));

        return redirect('/send-email')->with('success', 'your checkout is successful, now wait for the confirmation fo your order.');
    }


}
