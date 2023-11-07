@extends('layouts.myapp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
Create an Artist
</h2>

@endsection

@section('content')
<br>


<div class="w-full max-w-xs">
    <form action="{{ route('artists.store') }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" id="name" value="{{ old('name') }}"/>
            @if($errors->has('name'))
            <span> {{ $errors->first('name') }}
            @endif
        </div>
        <div class="mb-4">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="genre">Genre</label>
              <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="genre" name="genre">
                    <option value="pop">Pop</option>
                    <option value="rock">Rock</option>
                    <option value="metal">Metal</option>
                    <option value="jazz">Jazz</option>
                    <option value="hip hop">Hip Hop</option>
                    <option value="electronic">Electronic</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
              </div>
              @if($errors->has('genre'))
            <span> {{ $errors->first('genre') }}
            @endif
        </div>
        
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Create</button>
      </div>
    </form>
  </div>

@endsection