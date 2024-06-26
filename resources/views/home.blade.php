@extends('layouts/app')

@section('content')

<div class="container-fluid p-5 d-flex justify-content-center ">
<div id="monitor">
    <div id="monitorscreen mx-auto border border-2">
<div class="row border border-2 rounded pt-3">
    <h1 class="fs-1">Train departures</h1>
<table class="table-striped ">
    <thead>
      <tr>
        <th class="col px-2 text-center">Train</th>
        <th class="col px-2 py-4 text-center">Company</th>
        <th class="col px-2 text-center">Departure Station</th>
        <th class="col px-2 text-center">Arrival Station</th>
        <th class="col px-2 text-center">Departure Date</th>
        <th class="col px-2 text-center">Departure Time</th>
        <th class="col px-2 text-center">Arrival Time</th>
        <th class="col px-2 text-center">On Time</th>
        <th class="col px-2 text-center">Cancelled</th>
      </tr>
    </thead>
    <tbody>
      @if(!isset($trains))
        <tr>
            <td colspan="10" class="text-center fs-2">No trains scheduled</td>
        </tr>
      @endif

        @foreach ($trains as $train)
      <tr>
        <td class="col px-2 py-2 text-center">{{$train->train_code}}</td>
        <td class="col px-2 text-center">{{$train->company}}</td>
        <td class="col px-2 text-center">{{$train->departure_station}}</td>
        <td class="col px-2 text-center">{{$train->arrival_station}}</td>
        <td class="col px-2 text-center">{{$train->departure_date}}</td>
        <td class="col px-2 text-center">{{$train->departure_time}}</td>
        <td class="col px-2 text-center">{{$train->arrival_time}}</td>
        <td class="col px-2 text-center">{{($train->on_time == 1) ? 'Delayed' : 'Yes'}}</td>
        <td class="col px-2 text-center">{{$train->cancelled == 1 ? 'Yes' : ''}}</td>
    </tr>
    @endforeach
    </tbody>
  </table>
  <div class="warning-text w-100">
    <p class="fs-1 my-2 w-100">Mind the gap between the train and the platform!</p>
    </div>
</div>
</div>
</div>
</div>



@endsection