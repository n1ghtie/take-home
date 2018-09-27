@extends('layouts.app')

@section('title', 'Vehicle Details')

@section('content')

@php
$vehicle = $data->vehicle;
@endphp

<div class="ui container">
  <div class="ui items">
    <div class="ui item">
      <div class="content">
        <div class="header">{{ $data->full_name }}</div>
        <div class="meta">
          <span>{{ $data->profession }}, {{ $data->company }}.</span>
        </div>
      </div>
    </div>
  </div>

  <h1 class="ui header">Vehicle details</h1>
  <h2 class="ui header">{{ $vehicle->getMakeAndModel() }}</h2>
  <div class="ui grid">
    <div class="sixteen wide mobile eight wide computer column">
      <table class="ui striped table details">
        <tbody>
          <tr>
            <td>Registration Number:</td>
            <td class="license-plate"><span>{{ $vehicle->licence_plate }}</span></td>
          </tr>
          <tr>
            <td>Engine type:</td>
            <td>{{ $vehicle->type }}</td> 
          </tr>
          <tr>
            <td>Engine:</td>
            <td>{{ $vehicle->engine_cc }} cc</td>
          </tr>
          <tr>
            <td>Wheels:</td>
            <td>{{ $vehicle->no_wheels }}</td>
          </tr>
          <tr>
            <td>Doors:</td>
            <td>{{ $vehicle->no_doors }}</td>
          </tr>
          <tr>
            <td>Seats:</td>
            <td>{{ $vehicle->no_seats }}</td>
          </tr>
          <tr>
            <td>Colour:</td>
            <td>{{ $vehicle->prettifyColor() }}</td>
          </tr>
          <tr>
            <td>Weight Category:</td>
            <td>{{ $vehicle->weight_category }}</td>
          </tr>
          <tr>
            <td>Gears:</td>
            <td>{{ $vehicle->transmission }}</td>
          </tr>
          <tr>
            <td>Fuel:</td>
            <td>{{ $vehicle->type }}</td>
          </tr>
          <tr>
            <td>GPS:</td>
            <td>{{ $vehicle->has_gps ? 'yes' : 'no' }}</td>
          </tr>
          <tr>
            <td>Sunroof:</td>
            <td>{{ $vehicle->has_sunroof ? 'yes' : 'no' }}</td>
          </tr>
          <tr>
            <td>Heavy Goods Vehicle:</td>
            <td>{{ $vehicle->is_hgv ? 'yes' : 'no' }}</td>
          </tr>
          <tr>
            <td>Boot:</td>
            <td>{{ $vehicle->has_boot ? 'yes' : 'no' }}</td>
          </tr>
          <tr>
            <td>Trailer:</td>
            <td>{{ $vehicle->has_boot ? 'yes' : 'no' }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection