@extends('layouts.myapp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
Shows
</h2>

@endsection

@section('content')
<a href="{{ route('shows.create')}}">Create</a>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
            @forelse($shows as $show)
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
                <td class="px-6 py-4">
                    {{ $show->venue_id }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('shows.show', $show->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            @empty
            <h4>No shows found</h4>
        @endforelse
        </tbody>
    </table>
</div>
@endsection