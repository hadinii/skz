@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">

            <form class="md-float-material form-material" method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="text-center">
                    <img src="{{ asset('adminty\assets\images\logo.png') }}" alt="logo.png">
                </div>
                <div class="auth-box card">
                    <div class="card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-left">{{ __('Reset Password') }}</h3>
                            </div>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="form-group form-primary">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span class="form-bar"></span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Reset Password</button>
                            </div>
                        </div>
                        <p class="f-w-600 text-right">Back to <a href="{{ route('login') }}">Login</a></p>
                    </div>
                </div>
            </form>
        </div>
        <!-- end of col-sm-12 -->
    </div>
    <!-- end of row -->
</div>
@endsection
