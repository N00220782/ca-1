@extends('layouts.myapp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
Create a Venue
</h2>

@endsection

@section('content')
<br>

<!--Venues Create Form that stores inputted data using the POST method-->
<div class="w-full max-w-xs">
    <form action="{{ route('venues.store') }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    <!--Input fields that display error messages if data is not valid-->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" id="name" value="{{ old('name') }}"/>
            @if($errors->has('name'))
            <span> {{ $errors->first('name') }}
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="address" id="address" value="{{ old('address') }}" />
            @if($errors->has('address'))
            <span> {{ $errors->first('address') }}
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="capacity">Capacity</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="capacity" id="capacity" value="{{ old('capacity') }}" />
            @if($errors->has('capacity'))
            <span> {{ $errors->first('capacity') }}
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="phone" id="phone" value="{{ old('phone') }}" />
            @if($errors->has('phone'))
            <span> {{ $errors->first('phone') }}
            @endif
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="email" id="email" value="{{ old('email') }}" />
            @if($errors->has('email'))
            <span> {{ $errors->first('email') }}
            @endif
        </div>
      


      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Create</button>
      </div>
    </form>
  </div>

@endsection