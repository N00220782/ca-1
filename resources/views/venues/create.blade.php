@extends('layouts.myapp')

@section('content')
<h3>Create a Venue</h3>

<form action="{{ route('venues.store') }}" method="post">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" />
        @if($errors->has('name'))
        <span> {{ $errors->first('name') }}
        @endif
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="address" id="address" value="{{ old('address') }}" />
        @if($errors->has('address'))
        <span> {{ $errors->first('address') }}
        @endif
    </div>
    <div>
        <label>Capacity</label>
        <input type="text" name="capacity" id="capacity" value="{{ old('capacity') }}" />
        @if($errors->has('capacity'))
        <span> {{ $errors->first('capacity') }}
        @endif
    </div>
    <div>
        <label>Phone</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" />
        @if($errors->has('phone'))
        <span> {{ $errors->first('phone') }}
        @endif
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" />
        @if($errors->has('email'))
        <span> {{ $errors->first('email') }}
        @endif
    </div>
    <button type="submit">Create</button>
</form>
@endsection