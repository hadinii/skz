@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Authentication card start -->

                <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center">{{ __('Konsultasi') }}</h3>
                                </div>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-warning background-warning">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="icofont icofont-close-line-circled text-white"></i>
                                    </button>
                                    <strong>{{ $errors->first() }}</strong>
                                </div>
                            @endif
                            <div class="form-group form-primary">
                                <input type="text" name="email" class="form-control" required placeholder="Email Address">
                            </div>
                            <div class="form-group form-primary">
                                <input type="password" name="password" class="form-control" required
                                    placeholder="Password">
                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary d-">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i
                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="forgot-phone text-right f-right">
                                        <a href="auth-reset-password.htm" class="text-right f-w-600"> Forgot Password?</a>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                                    <p class="text-inverse text-left"><a href="index-1.htm"><b class="f-w-600">Back
                                                to website</b></a></p>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('adminty\assets\images\auth\Logo-small-bottom.png') }}"
                                        alt="small-logo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end of form -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    @endsection

    {{-- <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama
                    <small>*</small>
                </label>
                <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan Nama" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Email
                    <small>*</small>
                </label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Masukkan Email" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Alamat
                    <small>*</small>
                </label>
                <textarea class="form-control" name="alamat" rows="5" placeholder="Tuliskan Alamat Lengkap Anda." required></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Pertanyaan
                    <small>*</small>
                </label>
                <textarea class="form-control" name="pertanyaan" rows="5" placeholder="Tuliskan Pertanyaan Anda." required></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {!! htmlFormSnippet() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-success" name="kirim">Kirim</button>
            </div>
        </div>
    </div> --}}
