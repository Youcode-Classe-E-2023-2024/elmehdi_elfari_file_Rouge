<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Parcours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class ParcoursController extends Controller
{
    public function index()
    {
      $parcours = Parcours::with('City_depart','City_arrive')->get();
      $cities = City::all();
        return view('pages.Parcours', compact('parcours','cities'));
    }

    public function create()
    {
        return view('pages.Parcours');
    }

    public function store(Request $request)
    {
        $request->validate([
            'depart_id' => 'required|integer|exists:cities,id',
            'arrive_id' => 'required|integer|exists:cities,id|different:depart_id',
            'longeur_Parcour' => 'required|integer|max:255',
            'Prix_Parcour' => 'required|integer|max:255',
            'nbr_place' => 'required|integer|max:255',
            'time_depart' => 'required|date_format:H:i',
            'arrive_time' => 'required|date_format:H:i|after:time_depart',
        ]);

        $time_depart = \Carbon\Carbon::createFromFormat('H:i', $request->time_depart);
        $arrive_time = \Carbon\Carbon::createFromFormat('H:i', $request->arrive_time);

        $duree = $time_depart->diff($arrive_time)->format('%Hh %Im');

        $validated = [
            'depart_id' => $request->depart_id,
            'arrive_id' => $request->arrive_id,
            'longeur_Parcour' => $request->longeur_Parcour,
            'Prix_Parcour' => $request->Prix_Parcour,
            'nbr_place' => $request->nbr_place,
            'time_depart' => $time_depart,
            'arrive_time' => $arrive_time,
            'duree' => $duree,
        ];

        Parcours::create($validated);

        return redirect()->back()->with('success', 'Parcours created successfully.');
    }



    public function edit($id)
    {
        $parcour = Parcours::findOrFail($id);
        return view('pages.Parcours', compact('parcour'));
    }

    public function update(Request $request, $id)
    {
        $parcour = Parcours::findOrFail($id);
        $request->validate([
            'depart_id' => 'required',
            'arrive_id' => 'required',
            'longeur_Parcour' => 'required|integer|max:255',
            'Prix_Parcour' => 'required|integer|max:255',
            'nbr_place' => 'required|integer|max:255',
            'time_depart' => 'required|date_format:H:i',
            'arrive_time' => 'required|date_format:H:i|after:time_depart',
        ]);

        $time_depart = \Carbon\Carbon::createFromFormat('H:i', $request->time_depart);
        $arrive_time = \Carbon\Carbon::createFromFormat('H:i', $request->arrive_time);

        $duree = $time_depart->diff($arrive_time)->format('%Hh %Im');

        $parcour->fill([
            'depart_id' => $request->depart_id,
            'arrive_id' => $request->arrive_id,
            'longeur_Parcour' => $request->longeur_Parcour,
            'Prix_Parcour' => $request->Prix_Parcour,
            'nbr_place' => $request->nbr_place,
            'time_depart' => $time_depart,
            'arrive_time' => $arrive_time,
            'duree' => $duree,
        ]);

        // Exclude 'image' from fillable fields to prevent update attempt
        $parcour->save();

        return redirect()->back()->with('success', 'Parcours updated successfully.');
    }


    public function destroy(Parcours $parcours)
    {
        $parcours->delete();

        return redirect()->back()->with('success', 'Parcours deleted successfully.');
    }
}
