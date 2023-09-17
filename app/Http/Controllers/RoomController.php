<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;
use App\Models\Hotels; 
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{

    public function index()
    {
        $rooms = Rooms::all(); 

        return view('rooms.index', compact('rooms'));
    }
    public function create()
    {
        $hotels = Hotels::all(); 
        return view('rooms.create', compact('hotels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'room_type' => 'required|string|in:single,double,quad,king,suite,villa', 
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'available' => 'required|boolean',
        ]);

        try {
            $photoFile = $request->file('photo'); 
            $photoFileName = $photoFile->getClientOriginalName(); 
            $photoPath = $photoFile->storeAs('room_photos', $photoFileName, 'public'); 

            Rooms::create([
                'hotel_id' => $request->input('hotel_id'),
                'room_type' => $request->input('room_type'),
                'photo' => $photoPath, 
                'available' => $request->input('available'),
            ]);

            return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while creating the room.');
        }
    }

    public function edit($id)
    {
        $room = Rooms::findOrFail($id);
        $hotels = Hotels::all(); 
        return view('rooms.edit', compact('room', 'hotels'));
    }

    public function update(Request $request, $id)
    {
        $room = Rooms::findOrFail($id); 

        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'room_type' => 'required|string',
            'photo' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'available' => 'required|boolean',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('room_photos', 'public');
            $room->update(['photo' => $photoPath]);
        }

        $room->update([
            'hotel_id' => $request->input('hotel_id'),
            'room_type' => $request->input('room_type'),
            'available' => $request->input('available'),
        ]);

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }
    public function destroy($id)
    {
        $room = Rooms::findOrFail($id);
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }

    public function detailRoom(Hotel $hotel, Rooms $room)
    {
        $rooms = $hotel->rooms()->where('available', true)->get();

        return view('rooms.detail', compact('hotel', 'rooms'));
    }

    public function updateAvailability(Rooms $room)
    {
        $room->update([
            'available' => 1, // Mark the room as available
        ]);

        return redirect()->back()->with('success', 'Room availability updated.');
    }
}   
