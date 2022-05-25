<?php
$title = "Data Ustadz"
?>
@extends('layouts.admin')

@push('styles')
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminty\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css') }}">
    <!-- Switch component css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminty\bower_components\switchery\css\switchery.min.css') }}">
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
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target="#modal-create">Tambah Ustadz</button>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="feather icon-maximize full-card"></i></li>
                                <li><i class="feather icon-minus minimize-card"></i></li>
                                <li><i class="feather icon-trash-2 close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Pertanyaan Terjawab</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->konsultasi()->count() }}</td>
                                            <td>
                                                <span class="mr-2">{{ $row->is_aktif ? "Aktif" : "Non-Aktif" }}</span>
                                                <input type="checkbox" name="is_aktif" data-id="{{ $row->id }}" class="js-switch" {{ $row->is_aktif ? "checked" : "" }}>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-warning btn-change-pw px-2" data-id="{{ $row->id }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah Password">
                                                    <i class="feather icon-unlock mx-auto"></i>
                                                </button>
                                                {{-- <button class="btn btn-sm btn-danger btn-delete px-2" data-id="{{ $row->id }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus">
                                                    <i class="feather icon-trash-2 mx-auto"></i>
                                                </button> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Pertanyaan Terjawab</th>
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
    {{-- Modal Create --}}
    <div class="modal fade" id="modal-create" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal title</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if($errors->any())
                            <div class="alert alert-warning background-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group form-primary">
                            <label for="name">Nama Ustadz</label>
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group form-primary">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            <small class="text-muted">Email akan digunakan untuk Login</small>
                        </div>
                        <div class="form-group form-primary">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- Modal Change Password --}}
    <div class="modal fade" id="modal-change-password" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-change-password" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        @if($errors->any())
                            <div class="alert alert-warning background-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group form-primary">
                            <input type="password" id="password1" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password Baru" value="{{ old('password') }}" required>
                            <span class="form-bar"></span>
                        </div>
                        <div class="form-group form-primary">
                            <input type="password" id="password2" name="password2" class="form-control @error('password2') is-invalid @enderror" placeholder="Konfirmasi Password Baru" value="{{ old('password2') }}" required>
                            <span class="form-bar"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- data-table js -->
    <script src="{{ asset('adminty\bower_components\datatables.net\js\jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminty\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js') }}"></script>
    <!-- Switch component js -->
    <script type="text/javascript" src="{{ asset('adminty\bower_components\switchery\js\switchery.min.js') }}"></script>
    <script>
        const url = '{{ route('user.index') }}';
        const csrf = '{{ csrf_token() }}';

        $(document).ready(function() {
            $('#simpletable').DataTable();
            // Multiple swithces
	        var elem = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            elem.forEach(function(html) {
                var switchery = new Switchery(html, { color: '#4680ff', jackColor: '#fff', size: 'small' });
                html.onchange = function(e) {
                    const data = {
                        _method: 'PUT',
                        _token: '{{ csrf_token() }}',
                        is_aktif: html.checked ? 1 : 0
                    }
                    $.post(`${url}/status/${$(this).data('id')}`, data, function(res) {
                        notify('fas fa-check', 'success', res.message);
                    })
            });
        });

        // on change passwd
        $('.btn-change-pw').click(function() {
            $('#modal-change-password').modal('show');
            const id = $(this).data('id');
            $('#form-change-password').attr('action', `${url}/${id}`);
        });
        $('#form-change-password').submit(function(event) {
            const password = $('#password1').val();
            const password2 = $('#password2').val();
            if(password != password2){
                event.preventDefault();
                notify('fas fa-check', 'danger', 'Konfirmasi Password harus sama!');
            }
        });

        // show modal if any errors
        @if ($errors->any())
            $('#modal-create-edit').modal('show');
        @endif
        // show success notification on success
        @if ($message = session('success'))
            const message = '{{ $message }}'
            notify('fas fa-check', 'success', message);
        @endif
    </script>
@endpush
