@extends('layouts.myapp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
View Show: {{ $show->name }} ({{ $show->date }})
</h2>

@endsection

@section('content')
<br>

<!--Table that displays a selected show's data-->
<!--Allows a logged in user to edit and delete the particular show's data-->
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Date
            </th>
            <th scope="col" class="px-6 py-3">
                Start Time
            </th>
            <th scope="col" class="px-6 py-3">
                End Time
            </th>
            <th scope="col" class="px-6 py-3">
                Ticket Price
            </th>
            <th scope="col" class="px-6 py-3">
                Description
            </th>
            <th scope="col" class="px-6 py-3">
                Venue
            </th>
        </tr>
    </thead>
    <tbody>
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $show->name }}
            </th>
            <td class="px-6 py-4">
                {{ $show->date }}
            </td>
            <td class="px-6 py-4">
                {{ $show->start_time }}
            </td>
            <td class="px-6 py-4">
                {{ $show->end_time }}
            </td>
            <td class="px-6 py-4">
                {{ $show->ticket_price }}
            </td>
            <td class="px-6 py-4">
                {{ $show->description }}
            </td>
            <!--Goes into the venue table for the appropriate venue name
                to display in this show-->
            <td class="px-6 py-4">
                {{ $show->venue->name }}
            </td>
        </tr>
    </tbody>
</table>

<br>

<!--Table that displays what artists are playing in the selected show-->
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Artist(s)
            </th>
        </tr>
    </thead>
    <tbody>
<!--Loop that displays the appropriate artist from the artists table-->
        @forelse($show->artists as $artist)
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $artist->name }}
            </th>
        </tr>
            @empty
            <h4>No artists in {{ $show->name }}</h4>
        @endforelse
    </tbody>
</table>

<br>
<a href=" {{ route('shows.edit', $show->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
<br>
<br>
<form method="POST" action="{{ route('shows.destroy', $show->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Delete</button>
    <br>
</form>

@endsection