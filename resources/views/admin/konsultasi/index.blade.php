<?php
$title = "Konsultasi Zakat"
?>
@extends('layouts.admin')

@push('styles')
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminty\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminty\bower_components\datatables.net-buttons\css\buttons.dataTables.min.css') }}">
@endpush

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
                        <div class="btn-group" role="group">
                            <a href="{{ route('konsultasi.index', ['filter' => 'unanswered']) }}" class="btn btn-success {{ Request::get('filter') != "unanswered" ? "btn-outline-success" : "" }} btn-sm waves-effect waves-light">Belum Dijawab</a>
                            <a href="{{ route('konsultasi.index', ['filter' => 'answered']) }}" class="btn btn-inverse {{ Request::get('filter') != "answered" ? "btn-outline-inverse" : "" }} btn-sm waves-effect waves-light">Sudah Dijawab</a>
                            <a href="{{ route('konsultasi.index', ['filter' => 'all']) }}" class="btn btn-warning {{ Request::get('filter') != "all" ? "btn-outline-warning" : "" }} btn-sm waves-effect waves-light">Semua</a>
                        </div>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="feather icon-maximize full-card"></i></li>
                                <li><i class="feather icon-minus minimize-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Pertanyaan</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>Dijawab Oleh</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($konsultasi as $row)
                                        <tr>
                                            <td>{{ $row->nama }}</td>
                                            <td>{!! Str::limit($row->pertanyaan, 105, ' ...') !!}</td>
                                            <td>{{ ($row->created_at)->format('d-m-Y') }}</td>
                                            @if($row->status === "Belum Dijawab")
                                            <td class="badge bg-warning ">{{ $row->status }}</td>
                                            @else()
                                            <td class="badge bg-success">{{ $row->status }}</td>
                                            @endif
                                            <td>{{ is_null($row->jawaban_by?->name) ? "-" : $row->jawaban_by?->name}}</td>
                                            <td>
                                                <a href="{{ route('konsultasi.show', $row->id) }}" class="btn btn-sm btn-inverse px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Check Pertanyaan">
                                                    <i class="feather icon-info mx-auto"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>Pertanyaan</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- data-table js -->
    <script src="{{ asset('adminty\bower_components\datatables.net\js\jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminty\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminty\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminty\bower_components\datatables.net-buttons\js\buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminty\bower_components\datatables.net-buttons\js\pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminty\bower_components\datatables.net-buttons\js\vfs_fonts.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#simpletable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'pdf'
                ]
            });
        });
    </script>
@endpush
