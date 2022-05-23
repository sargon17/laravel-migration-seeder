
@extends('layouts.indexLayout')

@dump($trains);

{{-- @section('train_code')

   {{ $trains->train_code }}

@endsection

@section('arrive_station')

{{ $trains->arrive_station }}

@endsection

@section('depart_station')

{{ $trains->depart_station }}

@endsection

@section('arrive_time')

{{ $trains->arrive_time }}

@endsection

@section('depart_time')

{{ $trains->depart_time }}

@endsection

@section('duration')

{{ $trains->arrive_time->diff($trains->depart_time, true) }}

@endsection

@section('state')

    {{ $trains->state }}

@endsection

@section('delay')

{{ $trains->delay }}

@endsection

@dump($trains->arrive_time->diff($trains->depart_time, true));
 --}}
