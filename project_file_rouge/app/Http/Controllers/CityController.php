<?php

namespace App\Http\Controllers;


use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();;
        return view('pages.city', compact('cities'));
    }

    public function create()
    {
        return view('pages.city');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_gare_depart' => 'required|string|max:255',
            'name_gare_arriver' => 'required|string|max:255',
        ]);

        City::create($request->all());

        return redirect()->back()->with('success', 'City created successfully.');
    }

    public function edit(City $city)
    {
        return view('pages.city', compact('city'));
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'name_gare_depart' => 'required|string|max:255',
            'name_gare_arriver' => 'required|string|max:255',
        ]);

        $city->update($request->all());

        return redirect()->back()->with('success', 'City updated successfully.');
    }

    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->back()->with('success', 'City deleted successfully.');
    }
}
