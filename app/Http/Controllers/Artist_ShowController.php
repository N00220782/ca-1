<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist_Show;

class Artist_ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artist_shows = Artist_Show::all();
        return view('artist_shows.index', [
            'artist_shows' => $artist_shows
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artist_shows.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->title);

        //validation rules
        $rules = [
            'artist_id' => 'required',
            'show_id' => 'required'
        ];

        $messages = [
            'artist_id.required' => 'Artist ID is required.',
            'show_id.required' => 'Show ID is required.'
        ];

        $request->validate($rules, $messages);

        $artist_show = new Artist_Show;
        $artist_show->artist_id = $request->artist_id;
        $artist_show->show_id = $request->show_id;
        $artist_show->timestamps = $request->timestamps;
        $artist_show->save();

        return redirect()
        ->route('artist_shows.index')
        ->with('status', 'Created a new artist_show :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artist_show = Artist_Show::findOrFail($id);
        return view('artist_shows.show', [
            'artist_show' => $artist_show
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artist_show = Artist_Show::findOrFail($id);
        return view('artist_shows.edit', [
            'artist_show' => $artist_show
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
            'artist_id' => 'required',
            'show_id' => 'required'
        ];

        $messages = [
            'artist_id.required' => 'Artist ID is required.',
            'show_id.required' => 'Show ID is required.'
        ];


        $request->validate($rules, $messages);

        $artist_show = Artist_Show::findOrFail($id);
        $artist_show->artist_id = $request->artist_id;
        $artist_show->show_id = $request->show_id;
        $artist_show->timestamps = $request->timestamps;
        $artist_show->save();

        return redirect()
        ->route('artist_shows.index')
        ->with('status', 'Updated the artist_show :)');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $artist_show = Artist_Show::findOrFail($id);
        $artist_show->delete();

        return redirect()->route('artist_shows.index')->with('status', 'Selected artist_show deleted successfully :)');
        
    }
}
