<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $ville = City::all();
        return view('pages.city', ['ville' => $ville]);
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
        $ville = City::find($id);

        if (!$ville) {
            return redirect()->back()->with('error', 'City not found.');
        }

        return view('pages.city', compact('ville'));
    }



    public function update(Request $request, City $cities)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $cities->update($request->all());

        return redirect()->back()->with('success', 'City updated successfully.');
    }

    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->back()->with('success', 'City deleted successfully.');
    }
}
