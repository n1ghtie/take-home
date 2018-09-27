@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="full-height">
    <div class="ui middle aligned center aligned grid">
        <div class="four wide column">
            <h2 class="ui teal image header">
                  <div class="content">
                        Log-in
                  </div>
            </h2>
            <form class="ui large form" method="POST" action="{{ route('login') }}" aria-label="Login">
                @csrf

                <div class="ui segment">
                    <div class="field">
                        @if($errors->has('email'))
                        <div class="ui pointing below red basic label">{{ $errors->first('email') }}</div>
                        @endif

                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="email" placeholder="E-mail address" required>
                        </div>
                    </div>
                    <div class="field">
                        @if($errors->has('password'))
                            <div class="ui pointing below red basic label">{{ $errors->first('password') }}</div>
                        @endif

                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <button class="ui fluid large teal submit button">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
