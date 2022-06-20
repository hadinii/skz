<?php
$title = "Konsultasi Zakat"
?>
@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>{{ $title }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $title }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{ $konsultasi->nama }}</h5>
                        <span>{{ $konsultasi->email }}</span>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="feather icon-maximize full-card"></i></li>
                                <li><i class="feather icon-minus minimize-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <form action="{{ route('konsultasi.update', $konsultasi->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <p>
                                "{{ $konsultasi->pertanyaan }}"
                            </p>
                            @if (is_null($konsultasi->jawaban))
                                <div class="form-group" id="jawaban_box" style="display: none">
                                    <textarea class="ckeditor form-control" name="jawaban"></textarea>
                                </div>
                                @if (!auth()->user()->is_admin)
                                <button type="button" class="btn btn-primary float-right" id="btn_jawab">Balas</button>
                                <button type="submit" class="btn btn-primary float-right" id="btn_kirim" style="display: none">Kirim</button>
                                @endif
                            @else
                                <div class="media mt-3">
                                    <div class="media-body b-b-theme b-t-theme social-client-description pt-3 mx-3">
                                        <div class="chat-header">{{ $konsultasi->jawaban_by->name }} <small class="text-muted ml-2">{{ $konsultasi->jawaban_at->format('d F Y H:i') }}</small></div>
                                        <div class="text-muted">
                                            {!! $konsultasi->jawaban !!}
                                        </div>
                                    </div>
                                </div>
                            @endif
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            // $('.ckeditor').ckeditor();

            $('#btn_jawab').click(function(){
                $('#jawaban_box').show();
                $('#btn_jawab').hide();
                $('#btn_kirim').show();
            });
        });
    </script>
@endpush
