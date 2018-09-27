@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="ui container">
  <h1 class="ui header">Owner Details Overview</h1>
  <p>Click on name to view more details</p>
  <table class="ui celled selectable striped table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Profession</th>
        <th>Company</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $user)
      <tr>
        <td><strong>{{ $user->id }}</strong></td>
        <td><a href="{{ route('user', ['user_id' => $user->id]) }}">{{ $user->full_name }}</a></td>
        <td>{{ $user->profession }}</td>
        <td>{{ $user->company }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
