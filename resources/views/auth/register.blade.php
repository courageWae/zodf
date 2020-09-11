@extends('user.layouts.app')

@section('title', 'Register')

@section('page', 'register')

@section('main')

<section class="register-area">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form method="POST" action="{{ route('register') }}" class="learnpro-register-form">
                <p class="lead">Register New Account</p>
                @csrf
                <input type="hidden" value="2" name="role_id">

                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" placeholder="Full Name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="E-mail">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="off" placeholder="Active Phone number">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $phone }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                </div>

                <div class="form-group register-btn">
                        <button type="submit" class="btn btn-primary btn-lg">
                            {{ __('Register') }}
                        </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
