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
                                alt="looginpage">
                        </a>
                    </div>
                    <div class="login-main">
                        <form class="theme-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <h4>Create your account</h4>
                            <p>Enter your personal details to create account</p>
                            <div class="form-group">
                                <label class="col-form-label pt-0">{{ __('Your Name') }}</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    name="name" placeholder="Your Name" value="{{ old('name') }}" required
                                    autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">{{ __('Email Address') }}</label>
                                <input class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" placeholder="Test@gmail.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">{{ __('Password') }}</label>
                                <div class="form-input position-relative">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        name="password" required="" placeholder="*********" autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">{{ __('Confirm Password') }} </label>
                                <div class="form-input position-relative">
                                    <input class="form-control @error('password') is-invalid @enderror"
                                        id="password-confirm" type="password" name="password_confirmation" required=""
                                        placeholder="*********" autocomplete="current-password">

                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">{{ __('Date of Birth') }}</label>
                                <input class="form-control @error('date_of_birth') is-invalid @enderror" type="date"
                                    name="date_of_birth" value="{{ old('date_of_birth') }}" max="{{ date('Y-m-d') }}"
                                    required="">
                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">{{ __('Gender') }}</label>
                                <select class="form-select @error('gender') is-invalid @enderror" name="gender"
                                    id="gender" required="">
                                    <option selected="">Please enter gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">{{ __('Country') }}</label>
                                <select class="form-select country @error('country') is-invalid @enderror" name="country"
                                    id="country" required="" data-action="{{ route('countriesstateAjax') }}">
                                    <option selected="">Please select country</option>
                                    @if (!empty($country))
                                        @foreach ($country as $countries)
                                            <option value="{{ $countries->id }}">{{ $countries->name }}</option>
                                        @endforeach
                                    @endif

                                </select>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">{{ __('State') }}</label>
                                <select class="form-select state @error('state') is-invalid @enderror" name="state"
                                    id="state" required="" data-action="{{ route('statebycityAjax') }}">
                                    <option selected="">Please select state</option>
                                </select>
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">{{ __('City ') }}</label>
                                <select class="form-select city @error('city') is-invalid @enderror" name="city"
                                    id="city" required="">
                                    <option selected="">Please select city</option>
                                </select>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Agree with
                                        <a class="ms-2" href="#">Privacy Policy</a>
                                    </label>
                                </div>
                                <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                            </div>
                            <h6 class="text-muted mt-4 or">Or signup with</h6>

                            <p class="mt-4 mb-0">Already have an account?
                                <a class="ms-2" href="{{ route('loginform') }}">Sign in</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#country').on("change", function(e) {
                var data = {};
                data['countries_id'] = $(this).val();
                data['_token'] = $('meta[name="csrf-token"]').attr('content');
                var action = $(this).data("action");
                var id = "#state";
                var placeholder = "Please select state";
                callAjax(action, "post", data, id, placeholder)
            });

            $('#state').on("change", function(e) {
                var data = {};
                data['states_id'] = $(this).val();
                data['_token'] = $('meta[name="csrf-token"]').attr('content');
                var action = $(this).data("action");
                var id = "#city";
                var placeholder = "Please select city";
                callAjax(action, "post", data, id, placeholder)
            });
        });

        function callAjax(url, method, data, id, placeholder) {
            $.ajax({
                url: url,
                method: method,
                data: data,
                success: function(response) {
                    if (response.length > 0) {
                        var option = '<option value="">' + placeholder + '</option>';
                        $(response).each((index, element) => {
                            option += '<option value="' + element.id + '">' + element.name +
                                '</option>';
                        });
                        $(id).html(option);
                    }
                },
                error: function(response) {
                    console.log('error response ', response);
                }
            });
        }
    </script>
@endsection
