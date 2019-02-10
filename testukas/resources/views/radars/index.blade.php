@extends('layouts.app')

@section('content')
    <a class="btn btn-secondary" href="{{url('radars/create')}}">Create new</a>
<table class="table table-bordered">
    <tr>
        <th><h3>Id</h3></th>
        <th><h3>Date</h3></th>
        <th><h3>Number</h3></th>
        <th><h3>Speed (km)</h3></th>
        <th><h3>Action</h3></th>
    </tr>
    @foreach ($radars as $key => $radar)
        <tr>
            <td>{{$radar->id}}</td>
            <td><a href="{{url('radars', ['radar' => $radar->id])}}">{{$radar->date}}</a></td>
            <td>{{$radar->number}}</td>
            <td>{{round($radar->distance/$radar->time/3.6)}}</td>

            <td>
                <a class="btn btn-primary" href="{{url('radars/edit', ['radar' => $radar->id])}}">Edit</a>
                <form action="{{ url('/radars', ['radar' => $radar->id]) }}" method="post">
                <input onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit" value="Delete" />
                {!! method_field('delete') !!}
                {!! csrf_field() !!}
                </form>
            </td>
        </tr>
    @endforeach
</table>
    {{ $radars->links() }}
@endsection

<style>
    .btn-primary {
        width: 67px;
        float: left;
    }

    table {
        text-align: center;
    }

    .btn-secondary {
        width: 150px;
        margin: 10px 10px 10px 0;
    }

</style>
