@extends('layouts.app')

@section('content')
    <h3 class="radar-new">Naujo įrašo sukūrimas</h3>
{{--@if ($errors->any())--}}
    {{--<div class="alert alert-danger">--}}
        {{--<ul>--}}
            {{--@foreach ($errors->all() as $error)--}}
                {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--@endif--}}
    <form method="post" action="{{ url("radars") }}">
        {{ csrf_field() }}
        <input class="form-save" name="date" placeholder="date" value="{{ old('date') }}">
        <input class="form-save" name="number" placeholder="number" value="{{ old('number') }}">
        <input class="form-save" name="distance" placeholder="distance" value="{{ old('distance') }}">
        <input class="form-save" name="time" placeholder="time" value="{{ old('time') }}">
        <button class="btn btn-success" type="submit">Save</button>
    </form>
@endsection

<style>

    .radar-new {
        margin: 10px;
    }

    .btn-success {
        width: 250px;
        margin-top: 10px;
    }

    .form-save {
        height: 35px;
        border-radius: 5px;
        display: block;
        margin: 15px 5px 5px 0;
        width: 250px;
    }

</style>