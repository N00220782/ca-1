@extends('layouts.myapp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
View Venue
</h2>

@endsection

@section('content')
<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <div class="px-6 py-4">
        @forelse($venues as $venue)
            <div class="font-bold text-xl mb-2">{{ $venue->name }}</div>
            <p class="text-gray-700 text-base">{{ $venue->address }}</p>
            <p class="text-gray-700 text-base">{{ $venue->capacity }}</p>
            <p class="text-gray-700 text-base">{{ $venue->phone }}</p>
            <p class="text-gray-700 text-base">{{ $venue->email }}</p>
        @empty
        <h4>No venues found</h4>
        @endforelse
    </div>
    <div class="px-6 pt-4 pb-2">
        <a href=" {{ route('todos.edit', $todo->id) }}">Edit</a>
        <form method="POST" action="{{ route('todos.destroy', $todo->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
  </div>

@endsection