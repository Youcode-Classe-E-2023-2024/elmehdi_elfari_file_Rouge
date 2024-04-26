<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('pages.city', compact('cities'));
    }


    public function create()
    {
        return view('pages.city');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        City::create($request->all());

        return redirect()->back()->with('success', 'City created successfully.');
    }

    public function edit($id)
    {
        $wantedCity = City::find($id);
        $cities = City::all();
        $edit = true;
        if (!$wantedCity) {
            return redirect()->back()->with('error', 'City not found.');
        }

        return view('pages.city', compact('wantedCity', 'cities', 'edit'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'id' => 'required|string|exists:cities'
        ]);
        $city = City::find($request->id);
        $city->name = $request->name;
        $city->save();
        return redirect()->back()->with('success', 'City updated successfully.');
    }

    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->back()->with('success', 'City deleted successfully.');
    }

}
