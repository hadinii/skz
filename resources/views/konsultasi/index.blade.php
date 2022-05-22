@extends('layout.app')

@section('content')
    {{-- <div class="card">
    <div class="card-header">
        <div class="card-block"> --}}
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
    </div>


    {{-- </div>
    </div>
</div> --}}
