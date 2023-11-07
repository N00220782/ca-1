<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venues = Venue::all();
        return view('venues.index', [
            'venues' => $venues
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('venues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->title);

        //validation rules
        $rules = [
            'name' => 'required|string|unique:shows,name|min:2|max:150',
            'address' => 'required',
            'capacity' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ];

        $messages = [
            'name.unique' => 'Venue name should be unique.',
            'name.required' => 'Venue name is required.',
            'address.required' => 'Venue address is required.',
            'capacity.required' => 'Venue capacity is required.',
            'phone.required' => 'Venue phone number is required.',
            'email.required' => 'Venue email address is required.'
        ];

        $request->validate($rules, $messages);

        $venue = new Venue;
        $venue->name = $request->name;
        $venue->address = $request->address;
        $venue->capacity = $request->capacity;
        $venue->phone = $request->phone;
        $venue->email = $request->email;
        $venue->timestamps = $request->timestamps;
        $venue->save();

        return redirect()
        ->route('venues.index')
        ->with('status', 'Created a new venue :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $venue = Venue::findOrFail($id);
        return view('venues.show', [
            'venue' => $venue
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $venue = Venue::findOrFail($id);
        return view('venues.edit', [
            'venue' => $venue
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->title);

        //validation rules
        $rules = [
            'name' => 'required|string|min:2|max:150',
            'address' => 'required',
            'capacity' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ];

        $messages = [
            'name.required' => 'Venue name is required.',
            'address.required' => 'Venue address is required.',
            'capacity.required' => 'Venue capacity is required.',
            'phone.required' => 'Venue phone number is required.',
            'email.required' => 'Venue email address is required.'
        ];

        $request->validate($rules, $messages);

        $venue = Venue::findOrFail($id);
        $venue->name = $request->name;
        $venue->address = $request->address;
        $venue->capacity = $request->capacity;
        $venue->phone = $request->phone;
        $venue->email = $request->email;
        $venue->timestamps = $request->timestamps;
        $venue->save();

        return redirect()
        ->route('venues.index')
        ->with('status', 'Updated the venue :)');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $venue = Venue::findOrFail($id);
        $venue->delete();

        return redirect()->route('venues.index')->with('status', 'Selected venue deleted successfully :)');
        
    }
}
