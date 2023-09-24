<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Hotels;
use App\Models\Rooms;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::with(['hotel', 'room'])
            ->whereIn('id', function ($query) {
                $query->selectRaw('MIN(id)')
                    ->from('bookings')
                    ->groupBy('room_id')
                    ->havingRaw('COUNT(room_id) > 0');
            })
            ->whereHas('room', function ($query) {
                $query->where('available', false);
            })
            ->get();
    
        return view('bookings.index', compact('bookings'));
    }
    

    public function create(Hotels $hotel, Rooms $room)
    {
        // Get the available rooms for the selected hotel
        $availableRooms = Rooms::where('hotel_id', $hotel->id)
            ->where('available', true)
            ->get();

        return view('bookings.create', compact('hotel', 'room', 'availableRooms'));
    }

    public function store(Request $request, Hotels $hotel, Rooms $room)
{
    $request->validate([
        'hotel_id' => 'required|exists:hotels,id',
        'room_id' => 'required|exists:rooms,id',
        'name' => 'required|string|max:255',
        'phone_no' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'date' => 'required|date',
        'time' => 'required|date_format:H:i',
        'message' => 'nullable|string|max:1000',
    ]);

    Booking::create([
        'hotel_id' => $request->input('hotel_id'), // Retrieve the hotel_id from the form
        'room_id' => $request->input('room_id'),
        'name' => $request->input('name'),
        'phone_no' => $request->input('phone_no'),
        'email' => $request->input('email'),
        'date' => $request->input('date'),
        'time' => $request->input('time'),
        'message' => $request->input('message'),
    ]);

    // Mark the selected room as unavailable
    $room->update(['available' => false]);

    return redirect()->route('payment')->with('success', 'Booking created successfully.');
}

}
