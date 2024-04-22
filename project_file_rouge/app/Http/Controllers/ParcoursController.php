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
        $parcours = Parcours::with('City_depart', 'City_arrive')->get();
        $cities = City::all();
        return view('pages.Parcours', compact('parcours', 'cities'));
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
            'distance_Parcour' => 'required|integer|max:255',
            'Prix_Parcour' => 'required|integer|max:255',
            'nbr_place' => 'required|integer|max:255',
            'classes' => 'required|integer|in:1,2',
            'time_depart' => 'required|date_format:H:i',
            'depart_date' => 'required|date|after_or_equal:today',
            'arrive_time' => 'required|date_format:H:i|after:time_depart',
        ]);

        $time_depart = \Carbon\Carbon::createFromFormat('H:i', $request->time_depart);
        $arrive_time = \Carbon\Carbon::createFromFormat('H:i', $request->arrive_time);

        $duree = $time_depart->diff($arrive_time)->format('%Hh %Im');

        $depart_date = \Carbon\Carbon::createFromFormat('Y-m-d', $request->depart_date)->toDateString();

        $validated = [
            'depart_id' => $request->depart_id,
            'arrive_id' => $request->arrive_id,
            'distance_Parcour' => $request->distance_Parcour,
            'Prix_Parcour' => $request->Prix_Parcour,
            'classes' => $request->classes,
            'nbr_place' => $request->nbr_place,
            'time_depart' => $time_depart,
            'arrive_time' => $arrive_time,
            'depart_date' => $depart_date,
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
            'distance_Parcour' => 'required|integer|max:255',
            'Prix_Parcour' => 'required|integer|max:255',
            'nbr_place' => 'required|integer|max:255',
            'classes' => 'required|integer|in:1,2',
            'time_depart' => 'required|date_format:H:i',
            'depart_date' => 'required|date|after_or_equal:today',
            'arrive_time' => 'required|date_format:H:i|after:time_depart',
        ]);

        $time_depart = \Carbon\Carbon::createFromFormat('H:i', $request->time_depart);
        $arrive_time = \Carbon\Carbon::createFromFormat('H:i', $request->arrive_time);

        $depart_date = \Carbon\Carbon::createFromFormat('Y-m-d', $request->depart_date);

        $duree = $time_depart->diff($arrive_time)->format('%Hh %Im');



        $parcour->fill([
            'depart_id' => $request->depart_id,
            'arrive_id' => $request->arrive_id,
            'distance_Parcour' => $request->distance_Parcour,
            'Prix_Parcour' => $request->Prix_Parcour,
            'classes' => $request->classes,
            'nbr_place' => $request->nbr_place,
            'time_depart' => $time_depart,
            'arrive_time' => $arrive_time,
            'depart_date' => $depart_date,
            'duree' => $duree,
        ]);

        $parcour->save();

        return redirect()->back()->with('success', 'Parcours updated successfully.');
    }


    public function destroy(Parcours $parcours)
    {
        $parcours->delete();

        return redirect()->back()->with('success', 'Parcours deleted successfully.');
    }

    public function parcours($class)
    {
        $parcours = Parcours::where('classes', $class)->get();

        if(is_null($parcours))
            return response()->json(['status'=> 'no data'], 302);

        return response()->json([
            'status' => 'data founded',
            'parcours' => $parcours
        ]);

    }
}
