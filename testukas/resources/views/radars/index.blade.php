@extends('layouts.app')

@section('content')
<h3>{{$date->format('Y-m-d')}}</h3>
<table>
    <tr>
        <th><h3>Number</h3></th>
        <th><h3>Speed (km)</h3></th>
    </tr>
    @foreach ($radars as $key => $value)
        <tr>
            <td>{{$value->number}}</td>
            <td>{{round($value->distance/$value->time/3.6)}}</td>
        </tr>
    @endforeach
</table>
@endsection
