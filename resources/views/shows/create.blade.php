@extends('layouts.myapp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
Create a Show
</h2>

@endsection

@section('content')
<br>


<div class="w-full max-w-xs">
    <form action="{{ route('shows.store') }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" id="name" value="{{ old('name') }}"/>
            @if($errors->has('name'))
            <span> {{ $errors->first('name') }}
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="date">Date</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="date" id="date" value="{{ old('date') }}" />
            @if($errors->has('date'))
            <span> {{ $errors->first('date') }}
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="start_time">Start Time</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="time" name="start_time" id="start_time" value="{{ old('start_time') }}" />
            @if($errors->has('start_time'))
            <span> {{ $errors->first('start_time') }}
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="end_time">End Time</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="time" name="end_time" id="end_time" value="{{ old('end_time') }}" />
            @if($errors->has('end_time'))
            <span> {{ $errors->first('end_time') }}
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="ticket_price">Ticket Price</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="ticket_price" id="ticket_price" value="{{ old('ticket_price') }}" />
            @if($errors->has('ticket_price'))
            <span> {{ $errors->first('ticket_price') }}
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="description" id="description" value="{{ old('description') }}" />
            @if($errors->has('description'))
            <span> {{ $errors->first('description') }}
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="venue_id">Venue</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="venue_id" id="venue_id" value="{{ old('venue_id') }}" />
            @if($errors->has('venue_id'))
            <span> {{ $errors->first('venue_id') }}
            @endif
        </div>
      


      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Create</button>
      </div>
    </form>
  </div>

@endsection