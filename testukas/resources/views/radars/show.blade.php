@extends('layouts.app')

@section('content')
    <div class="col-md-6">
        <h3 class="data">Įrašas Id{{' ' . $radar->id }}</h3>
        <table class="table table-bordered">
            <tr><td>Date</td><td>{{ $radar->date }}</td></tr>
            <tr><td>Number</td><td>{{ $radar->number }}</td></tr>
            <tr><td>Distance</td><td>{{ $radar->distance }}</td></tr>
            <tr><td>Time</td><td>{{ $radar->time }}</td></tr>
            <tr><td>Created at</td><td>{{ $radar->created_at }}</td></tr>
            <tr><td>Updated at</td><td>{{ $radar->updated_at }}</td></tr>
        </table>
        <a href="{{url('radars')}}">Go back</a>
    </div>
@endsection

<style>

    .data {
        margin: 20px 0 20px 0;
        text-align: center;
    }


</style>