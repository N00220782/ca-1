@extends('layouts.myapp')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
View Artist: {{ $artist->name }}
</h2>

@endsection

@section('content')
<br>

<!--Table that displays a selected artist's data-->
<!--Allows a logged in user to edit and delete the particular artist's data-->
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Genre
            </th>
        </tr>
    </thead>
    <tbody>
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $artist->name }}
            </th>
            <td class="px-6 py-4">
                {{ $artist->genre }}
            </td>
        </tr>
    </tbody>
</table>

<br>

<!--Table that displays which shows the artists are playing in-->
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Show(s)
            </th>
            <th scope="col" class="px-6 py-3">
                Date(s)
            </th>
        </tr>
    </thead>
    <tbody>
<!--Loop that displays the appropriate show from the shows table-->
        @forelse($artist->shows as $show)
        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $show->name }}
            </th>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $show->date }}
            </th>
        </tr>
            @empty
            <h4>No shows found</h4>
        @endforelse
    </tbody>
</table>

<br>
<a href=" {{ route('artists.edit', $artist->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
<br>
<br>
<form method="POST" action="{{ route('artists.destroy', $artist->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Delete</button>
    <br>
</form>

@endsection