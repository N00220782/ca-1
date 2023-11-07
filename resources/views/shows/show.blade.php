@extends('layouts.myapp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
View Show: {{ $show->name }} ({{ $show->date }})
</h2>

@endsection

@section('content')
<br>


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
            <th scope="col" class="px-6 py-3">
                Edit
            </th>
            <th scope="col" class="px-6 py-3">
                Delete
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
            <td class="px-6 py-4">
                {{ $show->venue->name }}
            </td>
            <td class="px-6 py-4">
                <a href=" {{ route('shows.edit', $show->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td>
            <td class="px-6 py-4">
                <form method="POST" action="{{ route('shows.destroy', $show->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                    <br>
                </form>
            </td>
        </tr>
    </tbody>
</table>

@endsection