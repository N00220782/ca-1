<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();
        return view('artists.index', [
            'artists' => $artists
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->title);

        //validation rules
        $rules = [
            'name' => 'required|string|unique:artists,name|min:2|max:150',
            'genre' => 'required'
        ];

        $messages = [
            'name.unique' => 'Artist name should be unique.',
            'name.required' => 'Artist name is required.',
            'genre.required' => 'Artist genre is required.'
        ];

        $request->validate($rules, $messages);

        $artist = new Artist;
        $artist->name = $request->name;
        $artist->genre = $request->genre;
        $artist->timestamps = $request->timestamps;
        $artist->save();

        return redirect()
        ->route('artists.index')
        ->with('status', 'Created a new artist :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artist = Artist::findOrFail($id);
        return view('artist.show', [
            'artist' => $artist
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artist = Artist::findOrFail($id);
        return view('artists.edit', [
            'artist' => $artist
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
            'name' => 'required|string|unique:artists,name|min:2|max:150',
            'genre' => 'required'
        ];

        $messages = [
            'name.unique' => 'Artist name should be unique.',
            'name.required' => 'Artist name is required.',
            'genre.required' => 'Artist genre is required.'
        ];

        $request->validate($rules, $messages);

        $artist = Artist::findOrFail($id);
        $artist->name = $request->name;
        $artist->genre = $request->genre;
        $artist->timestamps = $request->timestamps;
        $artist->save();

        return redirect()
        ->route('artists.index')
        ->with('status', 'Updated the artist :)');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $artist = Artist::findOrFail($id);
        $artist->delete();

        return redirect()->route('artists.index')->with('status', 'Selected artist deleted successfully :)');
        
    }
}
