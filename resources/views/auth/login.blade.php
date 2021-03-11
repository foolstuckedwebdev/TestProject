@extends('layouts.app')

@section('body')
<body class="bg-black">
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="d-flex justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img id="logo3" src="{{ asset('includes/resources/white_gb_words_logo.png') }}">
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-none bg-black">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="d-flex justify-content-center">
                            <div class="form-group row tb-width-100">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-equal">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="form-group row tb-width-100">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-equal">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-5">
                            <div class="form-group row btn-width-100">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-equal">
                                    <button type="submit" class="btn btn-sign-in btn-width-100">
                                        {{ __('Sign In') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="form-group row mb-0">
                                <div class="col">
                                    <a class="btn lp-links" href="{{ route('register') }}">
                                        Register
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="form-group row mb-0">
                                <div class="col">
                                    <a class="btn lp-links" href="#">
                                        Forgot Login
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
