@extends('layouts.app')
@section('content')
<div class="login-form">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1>Login</h1>
        <div class="content">
            <div class="input-field">
                <input type="email" placeholder="Email" autocomplete="nope" name="email" value="{{ old('email') }}">
                @error('email')
                <span class=" invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-field">
                <input type="password" placeholder="Password" autocomplete="new-password" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            @if(Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="link"> {{ __('Forgot Your Password?') }}</a>
            @endif
        </div>
        <div class="action">
            <button type="submit"> {{ __('Login') }}</button>
        </div>
    </form>
</div>
@endsection