@extends('layouts.app')

@section('content')
    <h3>Naujo Radar iraso sukurimas</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post" action="{{ url("radars") }}">
        {{ csrf_field() }}
        <input name="date" placeholder="date" value="{{ old('date') }}">
        <input name="number" placeholder="number" value="{{ old('number') }}">
        <input name="distance" placeholder="distance" value="{{ old('distance') }}">
        <input name="time" placeholder="time" value="{{ old('time') }}">
        <button type="submit">Save</button>
    </form>
@endsection