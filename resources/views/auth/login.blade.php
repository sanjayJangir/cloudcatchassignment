@extends('layouts.app')

@section('content')
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card login-dark">
                <div>
                    <div>
                        <a class="logo" href="{{ url('/') }}">
                            <img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage">
                            <img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                alt="looginpage"></a>
                    </div>
                    <div class="login-main">
                        <form class="theme-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <h4>Sign in to account </h4>
                            <p>Enter your email & password to login</p>
                            <div class="form-group">
                                <label class="col-form-label">{{ __('Email Address') }}</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email"
                                    name="email" required="" placeholder="Test@gmail.com" value="{{ old('email') }}"
                                    autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">{{ __('Password') }} </label>
                                <div class="form-input position-relative">
                                    <input class="form-control @error('password') is-invalid @enderror" id="password"
                                        type="password" name="password" required="" placeholder="*********"
                                        autocomplete="current-password">


                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="text-muted" for="checkbox1">{{ __('Remember Me') }}</label>
                                </div>




                                <div class="text-end mt-3">
                                    <button type="submit" class="btn btn-primary btn-block w-100">
                                        {{ __('Sign in') }}
                                    </button>
                                </div>
                            </div>
                            <h6 class="text-muted mt-4 or">Or Sign in with</h6>

                            <p class="mt-4 mb-0 text-center">Don't have account?
                                <a class="ms-2" href="{{ route('register') }}">Create Account</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
