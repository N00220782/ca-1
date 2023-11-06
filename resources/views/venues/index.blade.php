@extends('layouts.myapp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
Venues
</h2>

@endsection

@section('content')
<br>
<a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{ route('venues.create')}}">Create a New Venue...</button>
<br>
<br>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Capacity
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($venues as $venue)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $venue->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $venue->address }}
                </td>
                <td class="px-6 py-4">
                    {{ $venue->capacity }}
                </td>
                <td class="px-6 py-4">
                    {{ $venue->phone }}
                </td>
                <td class="px-6 py-4">
                    {{ $venue->email }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('venues.show', $venue->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            @empty
            <h4>No venues found</h4>
        @endforelse
        </tbody>
    </table>
</div>
@endsection