@extends('layouts.header')

@section('content')
<div class="section">
    <div class="container">
        <div class="hero-content app-hero-content text-center">
            <div class="row justify-content-md-center">
                <form class="md-float-material form-material" method="POST" action="{{ route('konsultasi.store') }}">
                    @csrf
                    <div class="row">
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
                    </div>
                </form>
            </div>
        </div>
    </div>
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
