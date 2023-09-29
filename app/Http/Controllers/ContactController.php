<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Your message has been sent!');
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', ['contacts' => $contacts]);
    }
}
