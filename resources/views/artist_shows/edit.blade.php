@extends('layouts.myapp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
Edit a Artist-Show
</h2>

@endsection

@section('content')
<br>


<div class="w-full max-w-xs">
    <form action="{{ route('artist_shows.update', $artist_show->id) }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="artist_id">Artist</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="artist_id" id="artist_id" value="{{ old('artist_id') ? :$artist_show->artist_id }}"/>
            @if($errors->has('artist_id'))
            <span> {{ $errors->first('artist_id') }}
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="show_id">Show</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="show_id" id="show_id" value="{{ old('show_id') ? :$artist_show->show_id }}" />
            @if($errors->has('show_id'))
            <span> {{ $errors->first('show_id') }}
            @endif
        </div>
        
      


      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Edit</button>
      </div>
    </form>
  </div>

@endsection