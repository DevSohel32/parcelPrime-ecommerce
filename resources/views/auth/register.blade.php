@extends('FontEnd.layouts.master')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center" style="min-height: 75vh;">
        <div class="col-12 col-sm-10 col-md-8 col-lg-5">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body p-4 p-sm-5">

                    <div class="text-center mb-4">
                        <h3 class="fw-bold text-dark">{{ __('Create Account') }}</h3>
                        <p class="text-muted small">{{ __('Get started with your new account') }}</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="John Doe" required autocomplete="name" autofocus>
                            <label for="name" class="text-muted">{{ __('Name') }}</label>

                            @error('name')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email">
                            <label for="email" class="text-muted">{{ __('Email Address') }}</label>

                            @error('email')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                            <label for="password" class="text-muted">{{ __('Password') }}</label>

                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            <label for="password-confirm" class="text-muted">{{ __('Confirm Password') }}</label>
                        </div>

                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" class="btn btn-primary btn-lg rounded-3 py-2 fs-6 fw-bold shadow-sm">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <div class="text-center mt-3">
                            <span class="text-muted small">{{ __('Already have an account?') }}</span>
                            <a href="{{ route('login') }}" class="text-decoration-none small fw-bold ms-1">{{ __('Sign In') }}</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
