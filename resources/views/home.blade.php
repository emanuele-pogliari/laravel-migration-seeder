@extends('layouts/app')

@section('content')

<div class="container p-4">
<div id="monitor">
    <div id="monitorscreen">
  
<h1>Train departures</h1>

<div class="row">

<table class="table-striped">
    <thead>
      <tr>
        <th class="col px-3 text-center">Company</th>
        <th class="col px-3 text-center">Departure Station</th>
        <th class="col px-3 text-center">Arrival Station</th>
        <th class="col px-3 text-center">Departure Date</th>
        <th class="col px-3 text-center">Departure Time</th>
        <th class="col px-3 text-center">Arrival Time</th>
        <th class="col px-3 text-center">Train Code</th>
        <th class="col px-3 text-center">Number of Wagons</th>
        <th class="col px-3 text-center">On Time</th>
        <th class="col px-3 text-center">Cancelled</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
      <tr>
        <td class="col px-3 py-2 text-center">{{$train->company}}</td>
        <td class="col px-3 text-center">{{$train->departure_station}}</td>
        <td class="col px-3 text-center">{{$train->arrival_station}}</td>
        <td class="col px-3 text-center">{{$train->departure_date}}</td>
        <td class="col px-3 text-center">{{$train->departure_time}}</td>
        <td class="col px-3 text-center">{{$train->arrival_time}}</td>
        <td class="col px-3 text-center">{{$train->train_code}}</td>
        <td class="col px-3 text-center">{{$train->number_of_coaches}}</td>
        <td class="col px-3 text-center">{{$train->on_time}}</td>
        <td class="col px-3 text-center">{{$train->cancelled}}</td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</div>



@endsection