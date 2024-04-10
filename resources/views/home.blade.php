@extends('layouts/app')

@section('content')

<h1>Train departures</h1>


<table class="table">
    <thead>
      <tr>
        <th scope="col">Company</th>
        <th scope="col">Departure Station</th>
        <th scope="col">Departure Date</th>
        <th scope="col">Departure Time</th>
        <th scope="col">Arrival Time</th>
        <th scope="col">Train Code</th>
        <th scope="col">Number of Wagons</th>
        <th scope="col">On Time</th>
        <th scope="col">Cancelled</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
      <tr>
        <td>{{$train->company}}</td>
        <td>{{$train->departure_station}}</td>
        <td>{{$train->departure_date}}</td>
        <td>{{$train->departure_time}}</td>
        <td>{{$train->arrival_time}}</td>
        <td>{{$train->train_code}}</td>
        <td>{{$train->number_of_coaches}}</td>
        <td>{{$train->on_time}}</td>
        <td>{{$train->cancelled}}</td>
    </tr>
    @endforeach
    </tbody>
  </table>




@endsection