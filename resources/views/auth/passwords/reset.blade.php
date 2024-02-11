{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.login')
@section('content')
    <main>
        <div class="login-container">
            <div class="user-login">
                <h1 class="text-center"><a href="{{ route('property.index') }}" class="login-brand">NepEstate</a></h1>
                <h4 class="my-2">Register to save your favourite homes</h4>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group  mt-4 mb-2">
                        <input id="name" type="text"
                            class=" modal-email form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <p class="d-none text-warning"><i class="fas fa-excamation-circle"></i> Name</p>
                    </div>
                    <div class="form-group   mt-4 mb-2">
                        <input id="email" type="email"
                            class=" modal-email form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" placeholder="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <p class="d-none text-warning"><i class="fas fa-excamation-circle"></i> Email</p>
                    </div>
                    <div class="form-group   mt-4 mb-2">
                        <input id="password" type="password"
                            class=" modal-email form-control @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <p class="d-none text-warning"><i class="fas fa-excamation-circle"></i> Password</p>
                    </div>
                    <div class="form-group mt-4 mb-2">
                        <input id="password-confirm" type="password" class=" modal-email form-control"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirm password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Register') }}
                    </button>
                </form>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </div>
                </form>
                <hr>
                <div>Or</div>
                <hr>
                <button class="btn btn-block btn-primary d-flex justify-content-center align-items-center">
                    <i class="fab fa-facebook"></i> Continue with
                    Facebook</button>
                <button class="btn btn-block btn-light d-flex justify-content-center align-items-center">
                    <i class="fab fa-google"></i> Continue with Google
                </button>
                <p class="terms-conditions mt-2">By continuing, I accept Nepestate's <a href="#"
                        class="primary-link">Terms of use</a> and <a href="#" class="primary-link">Privacy Policy.</a>
                </p>
                <hr>
                <div class="login-footer">
                    <div class="container text-center">
                        <p class="">Already have an Account? <a href="{{ route('login') }}" class="text-light">Login
                                Here</a></p>
                    </div>
                </div>
            </div>
            <!--user-login-->
        </div>
        <!--Login container-->
    </main>
@endsection

@push('js')
    <script>
        $(document).ready(function() {

        })
    </script>
@endpush

@push('css')
    <style>
    </style>
@endpush
