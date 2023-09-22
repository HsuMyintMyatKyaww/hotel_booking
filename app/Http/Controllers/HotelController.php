<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotels; 
use Illuminate\Support\Facades\Auth;


class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotels::all(); 

        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('hotels.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'hotel_name' => 'required|string',
            'city' => 'required|string',
        ]);

        Hotels::create([
            'hotel_name' => $request->input('hotel_name'),
            'city' => $request->input('city'),
            'created_by' => auth()->id(),
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('hotels.index')->with('success', 'Hotel created successfully.');
    }
    public function edit($id)
    {
        $hotel = Hotels::findOrFail($id); 
        return view('hotels.edit', compact('hotel'));
    }
    public function update(Request $request, $id)
    {
        $hotel = Hotels::findOrFail($id); 

        $request->validate([
            'hotel_name' => 'required|string',
            'city' => 'required|string',
        ]);

        $hotel->update([
            'hotel_name' => $request->input('hotel_name'),
            'city' => $request->input('city'),
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('hotels.index')->with('success', 'Hotel updated successfully.');
    }
    public function destroy($id)
    {
        $hotel = Hotels::findOrFail($id);
        $hotel->delete();

        return redirect()->route('hotels.index')->with('success', 'Hotel deleted successfully.');
    }
    // public function search(Request $request)
    // {
    //     $city = $request->input('city');
    //     $hotels = Hotels::where('city', $city)->get();
    //     return view('search', compact('hotels'));
    // }  
}
