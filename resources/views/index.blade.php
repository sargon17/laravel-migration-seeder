
@extends('layouts.indexLayout')

@section('trains_info')
    @foreach ($trains as $train )
    <tr>
        <td>{{ $train->id }}</td>
        <td>{{ $train->arrive_station }}</td>
        <td>{{ $train->depart_station }}</td>
        <td>{{ $train->dateDifference()}}</td>
        <td>{{ $train->fromDateTime($train->depart_time) }}</td>
        <td>{{ $train->fromDateTime($train->arrive_time) }}</td>
        <td>{{ $train->company_name}}</td>
        <td>{{ $train->state }}</td>
        <td>{{ $train->delay }} min</td>
    </tr>

    @endforeach

@endsection
