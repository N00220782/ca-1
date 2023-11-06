@extends('layouts.myapp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
Artists
</h2>

@endsection

@section('content')
<br>
<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" a href="{{ route('artists.create')}}">Create a New Artist...</button>
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
                    Genre
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($artists as $artist)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $artist->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $artist->genre }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('artists.show', $artist->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            @empty
            <h4>No artists found</h4>
        @endforelse
        </tbody>
    </table>
</div>
@endsection