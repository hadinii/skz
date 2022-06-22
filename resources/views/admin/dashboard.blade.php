@extends('layouts.admin')
@section('content')
    <div class="page-body">
        <div class="row">
            <!-- task, page, download counter  start -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-c-yellow update-card">
                    <a href="{{ route('konsultasi.index', ['filter' => 'all']) }}" class="card-block">
                        <div class="row align-items-end">
                            <div class="col-8">
                                <h4 class="text-white">{{ $konsultasiAll }}</h4>
                                <h6 class="text-white m-b-0">Pertanyaan Masuk</h6>
                            </div>
                            <div class="col-4 text-right"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                <canvas id="update-chart-1" height="100" style="display: block; height: 50px; width: 53px;" width="106"></canvas>
                            </div>
                        </div>
                    </a>
                    <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-c-green update-card">
                    <a href="{{ route('konsultasi.index', ['filter' => 'answered']) }}" class="card-block">
                        <div class="row align-items-end">
                            <div class="col-12">
                                <h4 class="text-white">{{ $konsultasiAnswered }}</h4>
                                <h6 class="text-white m-b-0">Pertanyaan Terjawab</h6>
                            </div>
                        </div>
                    </a>
                    <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-c-pink update-card">
                    <a href="{{ route('konsultasi.index', ['filter' => 'unanswered']) }}" class="card-block">
                        <div class="row align-items-end">
                            <div class="col-12">
                                <h4 class="text-white">{{ $konsultasiUnanswered }}</h4>
                                <h6 class="text-white m-b-0">Pertanyaan Belum Dijawab</h6>
                            </div>
                        </div>
                    </a>
                    <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i></p>
                    </div>
                </div>
            </div>
            @if (Auth::user()->is_admin)
            <div class="col-xl-3 col-md-6">
                <div class="card bg-c-lite-green update-card">
                    <a href="{{ route('user.index') }}" class="card-block">
                        <div class="row align-items-end">
                            <div class="col-8">
                                <h4 class="text-white">{{ $ustadz }}</h4>
                                <h6 class="text-white m-b-0">Jumlah Ustadz</h6>
                            </div>
                            <div class="col-4 text-right"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                <canvas id="update-chart-4" height="100" width="106" style="display: block; height: 50px; width: 53px;"></canvas>
                            </div>
                        </div>
                    </a>
                    <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i></p>
                    </div>
                </div>
            </div>
            @endif
            <!-- task, page, download counter  end -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
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
                                        <!-- <th>Actions</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($konsultasiUnansweredShow as $row)
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
                                            <!-- <td>
                                                <a href="{{ route('konsultasi.show', $row->id) }}" class="btn btn-sm btn-inverse px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Check Pertanyaan">
                                                    <i class="feather icon-info mx-auto"></i>
                                                </a>
                                            </td> -->
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
