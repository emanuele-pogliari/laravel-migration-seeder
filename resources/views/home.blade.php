@extends('layouts/app')

@section('content')

@foreach ($trains as $train)
 
<ul>
<li>{{$train->company}}</li>
<li>{{$train->departure_station}}</li>
<li>{{$train->arrival_station}}</li>
<li>{{$train->departure_date}}</li>
<li>{{$train->departure_time}}</li>
<li>{{$train->arrival_time}}</li>
<li>{{$train->train_code}}</li>
<li>{{$train->number_of_coaches}}</li>
<li>{{$train->on_time}}</li>
<li>{{$train->cancelled}}</li>
</ul>
@endforeach


@endsection