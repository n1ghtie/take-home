@extends('layouts.app')

@section('title', 'Forbidden')

@section('class', 'has-error')

@section('content')
<div class="full-height">
    <div class="ui middle aligned center aligned grid">
    <div class="column">
        <h1 class="ui header">
          UPS! You are not allowed here
        </h1>
        <p>Rewind and try another one or <a href="{{ route('home') }}">go to homepage</a></p>
    </div>
  </div>
</div>
@endsection