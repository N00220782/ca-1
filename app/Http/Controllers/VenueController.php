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
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'ticket_price' => 'required',
            'description' => 'required|string|min:5|max:1000',
            'venue_id' => 'required'
        ];

        $messages = [
            'name.unique' => 'Show name should be unique.',
            'name.required' => 'Show name is required.',
            'date.required' => 'Show date is required.',
            'start_time.required' => 'Show start time is required.',
            'end_time.required' => 'Show end time is required.',
            'ticket_price.required' => 'Ticket price is required.',
            'description.required' => 'Show description is required.',
            'venue_id.required' => 'Show venue is required.'
        ];

        $request->validate($rules, $messages);

        $show = new Show;
        $show->name = $request->name;
        $show->date = $request->date;
        $show->start_time = $request->start_time;
        $show->end_time = $request->end_time;
        $show->ticket_price = $request->ticket_price;
        $show->description = $request->description;
        $show->venue_id = $request->venue_id;
        $show->timestamps = $request->timestamps;
        $show->save();

        return redirect()
        ->route('shows.index')
        ->with('status', 'Created a new show :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Show::findOrFail($id);
        return view('shows.show', [
            'show' => $show
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $show = Show::findOrFail($id);
        return view('shows.edit', [
            'show' => $show
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
            'name' => 'required|string|unique:shows,name|min:2|max:150',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'ticket_price' => 'required',
            'description' => 'required|string|min:5|max:1000',
            'venue_id' => 'required'
        ];

        $messages = [
            'name.unique' => 'Show title should be unique.',
            'name.required' => 'Show name is required.',
            'date.required' => 'Show date is required.',
            'start_time.required' => 'Show start time is required.',
            'end_time.required' => 'Show end time is required.',
            'ticket_price.required' => 'Ticket price is required.',
            'description.required' => 'Show description is required.',
            'venue_id.required' => 'Show venue is required.'
        ];

        $request->validate($rules, $messages);

        $show = Show::findOrFail($id);
        $show->name = $request->name;
        $show->date = $request->date;
        $show->start_time = $request->start_time;
        $show->end_time = $request->end_time;
        $show->ticket_price = $request->ticket_price;
        $show->description = $request->description;
        $show->venue_id = $request->venue_id;
        $show->timestamps = $request->timestamps;
        $show->save();

        return redirect()
        ->route('shows.index')
        ->with('status', 'Updated the show :)');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $show = Show::findOrFail($id);
        $show->delete();

        return redirect()->route('shows.index')->with('status', 'Selected show deleted successfully :)');
        
    }
}
