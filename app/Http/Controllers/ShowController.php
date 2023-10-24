<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shows = Show::all();
        return view('shows.index', [
            'shows' => $shows
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shows.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->title);

        //validation rules
        $rules = [
            'name' => 'required|string|unique:shows,title|min:2|max:150',
            'description' => 'required|string|min:5|max:1000'
        ];

        $messages = [
            'name.unique' => 'Show title should be unique.'
        ];

        $request->validate($rules, $messages);

        $show = new Show;
        $show->name = $request->name;
        $show->description = $request->description;
        $show->save();

        return redirect()
        ->route('todos.index')
        ->with('status', 'Created a new Todo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.show', [
            'todo' => $todo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', [
            'todo' => $todo
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
            'title' => "required|string|unique:todos,title,{$id}|min:2|max:150",
            'body' => 'required|string|min:5|max:1000'
        ];

        $messages = [
            'title.unique' => 'Todo title should be unique.'
        ];

        $request->validate($rules, $messages);

        $todo = Todo::findOrFail($id);
        $todo->title = $request->title;
        $todo->body = $request->body;
        $todo->save();

        return redirect()
        ->route('todos.index')
        ->with('status', 'Updated Todo');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->route('todos.index')->with('status', 'Selected Todo deleted successfully!');
        
    }
}