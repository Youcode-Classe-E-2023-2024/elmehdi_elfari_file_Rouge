<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Parcours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
        $validated = $request->validate([
            'depart_id' => 'required|integer|exists:cities,id',
            'arrive_id' => 'required|integer|exists:cities,id|different:depart_id',
            'longeur_Parcour' => 'required|integer|max:255',
            'Prix_Parcour' => 'required|integer|max:255',
            'nbr_place' => 'required|integer|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:10240',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('EventsImg', 'public');
        }

        Parcours::create($validated);

        return redirect()->back()->with('success', 'Parcours created successfully.');
    }

    public function edit(Parcours $parcour)
    {
        return view('pages.Parcours', compact('parcour'));
    }

    public function update(Request $request, Parcours $parcour)
    {
        $request->validate([
            'depart_id' => 'required',
            'arrive_id' => 'required',
            'longeur_Parcour' => 'required|integer|max:255',
            'Prix_Parcour' => 'required|integer|max:255',
            'nbr_place' => 'required|integer|max:255',
            'image' => 'image|mimes:png,jpg,jpeg,svg|max:10240',
        ]);

        $parcour->fill($request->only([
            'depart_id',
            'arrive_id',
            'longeur_Parcour',
            'Prix_Parcour',
            'nbr_place',
        ]));

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete previous image if exists
            if ($parcour->image && Storage::disk('public')->exists($parcour->image)) {
                Storage::disk('public')->delete($parcour->image);
            }

            // Store new image
            $parcour->image = $request->file('image')->store('EventsImg', 'public');
        }

        // Save the updated Parcours
        $parcour->save();

        return redirect()->back()->with('success', 'Parcours updated successfully.');
    }



    public function destroy(Parcours $parcours)
    {
        $parcours->delete();

        return redirect()->back()->with('success', 'Parcours deleted successfully.');
    }
}
