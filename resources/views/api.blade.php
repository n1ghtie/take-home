@extends('layouts.app')

@section('title', 'Your API Key')

@section('class', 'has-error')

@section('content')
<div class="ui container">
<div class="ui form">
  <div class="field">
  	<label>Your Api token (Use this token in your requests to the server)</label>
  	<small>This token is used in header for authorisation (bearer token)</small>
  	<div class="ui left icon input" style="margin-bottom: 10px;">
        <i class="lock icon"></i>
        <input id="apitoken" readonly value="{{ $data }}">
    </div>
    <button class="ui button primary" onclick="document.querySelector('#apitoken').select();document.execCommand('copy');return false;">Copy to clipboard</button>
  </div>
</div>

</div>
@endsection