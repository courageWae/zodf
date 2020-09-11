@extends('user.layouts.app')

@section('title', 'Login')

@section('page', 'login')

@section('main')
    <!--  End header section-->
    
<section class="login-area">
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <p>Not a member? <a href="{{ route('register') }}" class="btn btn-primary"><strong>Join today</strong></a></p>
            <form method="POST" action="{{ route('login') }}" class="learnpro-register-form text-center">
                <p class="lead">Welcome Back</p>	
                @csrf

                <div class="form-group">
                        <input placeholder="E-mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                        <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group register-btn">
                        <button type="submit" class="btn btn-primary btn-lg">
                            {{ __('Login') }}
                        </button>
                </div>
                <p>Not a member? <a href="{{ route('register') }}"><strong>Join today</strong></a></p>
            </form>
        </div>
    </div>
</div>
</section>
@endsection