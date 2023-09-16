<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotels;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $city = $request->input('city');
        
        // Retrieve hotels with available rooms in the specified city
        $hotels = Hotels::where('city', $city)->with(['rooms' => function ($query) {
            $query->where('available', true);
        }])->get();

        return view('search', compact('hotels'));
    }
}
