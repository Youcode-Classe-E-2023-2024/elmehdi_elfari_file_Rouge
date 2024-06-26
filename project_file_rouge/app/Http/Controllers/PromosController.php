<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Parcours;
use App\Models\Promos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class PromosController extends Controller
{
    public function index()
    {
        $Promos = Promos::all();
        $parcours = Parcours::all();

        return view('pages.Promos', compact('Promos', 'parcours'));
    }

    public function create()
    {
        return view('pages.Promos');
    }

    public function store(Request $request)
    {
        $parcour = Parcours::findOrFail($request->parcour_id);
        $request->validate([
            'parcour_id' => 'required',
            'discount' => 'required',
        ]);

        Promos::create ([
            'parcour_id' => $request->parcour_id,
            'Prix_Parcour' => $parcour->Prix_Parcour / $request->discount,
            'discount' => $request->discount,
        ]);

        return redirect()->back()->with('success', 'Promos created successfully.');
    }

   /* public function edit($id)
    {
        $Promo = Promos::findOrFail($id);
        return view('pages.Parcours', compact('Promo'));
    }

    public function update(Request $request, $id)
    {
        $Promo = Promos::findOrFail($id);
        $request->validate([
            'depart_id' => 'required',
            'arrive_id' => 'required',
            'distance_Parcour' => 'required|integer|max:255',
            'Prix_Parcour' => 'required|integer|max:255',
            'nbr_place' => 'required|integer|max:255',
            'time_depart' => 'required|date_format:H:i',
            'depart_date' => 'required|date|after_or_equal:today',
            'arrive_time' => 'required|date_format:H:i|after:time_depart',
        ]);

        $time_depart = \Carbon\Carbon::createFromFormat('H:i', $request->time_depart);
        $arrive_time = \Carbon\Carbon::createFromFormat('H:i', $request->arrive_time);

        $duree = $time_depart->diff($arrive_time)->format('%Hh %Im');

        $depart_date = \Carbon\Carbon::createFromFormat('Y-m-d', $request->depart_date)->toDateString();

        $Promo->fill([
            'depart_id' => $request->depart_id,
            'arrive_id' => $request->arrive_id,
            'distance_Parcour' => $request->distance_Parcour,
            'Prix_Parcour' => $request->Prix_Parcour,
            'nbr_place' => $request->nbr_place,
            'time_depart' => $time_depart,
            'arrive_time' => $arrive_time,
            'depart_date' =>$depart_date,
            'duree' => $duree,
        ]);

        $Promo->save();

        return redirect()->back()->with('success', 'Promos updated successfully.');
    }

*/
    public function destroy(Promos $Promos)
    {
        $Promos->delete();

        return redirect()->back()->with('success', 'Promos deleted successfully.');
    }

    public function Promos()
    {
        $Promos = Promos::all();
       /* $cities = City::all();*/
        return view('pages.promo', compact('Promos'));
    }


}
