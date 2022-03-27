@extends('layouts.auth')

@section('content')
<div class="container vh-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-lg-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Create an Account!') }}</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="{{ __('Full Name') }}" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input class="form-control form-control-user" id="password-confirm" name="password_confirmation" type="password" placeholder="{{ __('Repeat Password') }}" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block" type="submit">
                                        {{ __('Register Account') }}
                                    </button>
                                </form>
                                <hr>
                                @if (Route::has('password.request'))
                                    <div class="text-center">
                                        <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                    </div>
                                @endif
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">{{ __('Already have an account? Login!') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
