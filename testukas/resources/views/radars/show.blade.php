@extends('layouts.app')

@section('content')
    <h3>Irasas Id{{' ' . $radar->id }}</h3>
    <table>
        <tr><td>Date</td><td>{{ $radar->date }}</td></tr>
        <tr><td>Number</td><td>{{ $radar->number }}</td></tr>
        <tr><td>Distance</td><td>{{ $radar->distance }}</td></tr>
        <tr><td>Time</td><td>{{ $radar->time }}</td></tr>
        <tr><td>Created at</td><td>{{ $radar->created_at }}</td></tr>
        <tr><td>Updated at</td><td>{{ $radar->updated_at }}</td></tr>
    </table>
@endsection

