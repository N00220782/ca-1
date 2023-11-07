@extends('layouts.myapp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
View Venue: {{ $venue->name }}
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
            <th scope="col" class="px-6 py-3">
                Delete
            </th>
        </tr>
    </thead>
    <tbody>
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
                <a href=" {{ route('venues.edit', $venue->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td>
            <td class="px-6 py-4">
                <form method="POST" action="{{ route('venues.destroy', $venue->id) }}">
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