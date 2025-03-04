@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group text-left">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group text-left">
        <label for="password" class="control-label">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group d-flex justify-content-between">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="custom-control-label" for="remember">Remember Me</label>
        </div>
        @if (Route::has('password.request'))
            <a class="text-small" href="{{ route('password.request') }}">Forgot Password?</a>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-block text-white" style="background-color: #6C46A1; border-radius: 8px;">
            Login
        </button>
    </div>
</form>
@endsection
