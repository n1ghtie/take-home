@extends('layouts.app')

@section('title', 'Home')

@section('content')
@include('partials.nav')

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
    <div class="six wide column">
      <table class="ui striped table">
        <tbody>
          <tr>
            <td>Registration Number:</td>
            <td>{{ $vehicle->licence_plate }}</td>
          </tr>
          <tr>
            <td>Engine type</td>
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
            <td>{{ $vehicle->color }} <span class="color-label" style="display: inline-block;width: 10px; height: 10px; border-radius: 50%; color: {{$vehicle->color}}"></span></td>
          </tr>
          <tr>
            <td>Weight Category:</td>
            <td>{{ $vehicle->weight_category }}</td>
          </tr>
          <tr>
            <td>Gears:</td>
            <td>{{ $vehicle->transmission }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection