@extends('layouts.base')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-body">
                <!-- Bordered striped start -->
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <a href="#">
                            <div class="card pull-up  rounded-0">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Total Pegawai
                                    </h4>
                                </div>
                                <div class="card-content collapse show height-100">
                                    <div class="card-body p-2">
                                        <h4 class="font-large-2 text-bold-400">
                                            {{ $totalPegawai }} <i class="ft-user float-right"></i>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <a href="#">
                            <div class="card pull-up  rounded-0">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Total User
                                    </h4>
                                </div>
                                <div class="card-content collapse show height-100">
                                    <div class="card-body p-2">
                                        <h4 class="font-large-2 text-bold-400">
                                            {{ $totalUser }} <i class="ft-check-circle float-right"></i>
                                        </h4>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- <div class="col-md-12 col-lg-3">
                        <a href="#">
                            <div class="card pull-up rounded-0">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        User Belum Terkonfirmasi
                                    </h4>
                                </div>
                                <div class="card-content collapse show height-100">
                                    <div class="card-body p-2">
                                        <h4 class="font-large-2 text-bold-400 text-info">
                                            111 <i class="ft-user-check float-right"></i>
                                        </h4>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div> --}}
                    <div class="col-md-12 col-lg-8">
                        <div class="card">
                            <div class="card-header p-1">
                                <h4 class="card-title float-left">Jumlah Berkas <span
                                        class="font-small-3 mb-0 text-dark text-bold-700">Dosel PNS</span></h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-footer text-center p-1">
                                    <div class="row">
                                        <div
                                            class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                            <p class="mb-0 text-dark text-bold-700">Semua</p>
                                            <p class="font-medium-5 text-bold-700">{{ $totalBerkas }}</p>
                                        </div>
                                        <div
                                            class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                            <p class="mb-0 text-dark text-bold-700">Pensiun</p>
                                            <p class="font-medium-5 text-bold-400">{{ $totalPensiun }}</p>
                                        </div>
                                        <div
                                            class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                            <p class="mb-0 text-dark text-bold-700">Kenaikan Pangkat</p>
                                            <p class="font-medium-5 text-bold-400">{{ $totalKenaikan }}</p>
                                        </div>
                                        <div class="col-md-3 col-12 text-center">
                                            <p class="mb-0 text-dark text-bold-700">Tahor</p>
                                            <p class="font-medium-5 text-bold-400">{{ $totalTahor }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <span class="text-muted"><a href="#" class="danger darken-2">Dosel PNS</a>
                                        Statistik</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card pull-up bg-gradient-directional-light">
                                    <div class="card-header bg-hexagons">
                                        <h4 class="card-title text-dark text-bold-700">Analisis</h4>
                                        <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li>
                                                    <a class="btn btn-sm btn-white text-dark text-bold-700 box-shadow-1 round btn-min-width pull-right"
                                                        href="#" target="_blank">Report <i
                                                            class="ft-bar-chart pl-1"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content collapse show bg-hexagons">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="align-self-center width-100">
                                                    <div id="Analytics-donut-chart" class="height-100 donutShadow"></div>
                                                </div>
                                                <div class="media-body text-right mt-1">
                                                    <h3 class="font-large-2 text-dark text-bold-700">
                                                        {{ $totalBerkasBaru > 99 ? $totalBerkasBaru . '+' : $totalBerkasBaru }}
                                                    </h3>
                                                    <h6 class="mt-1"><span class="text-muted text-dark text-bold-700">Berkas baru
                                                            dalam
                                                            <a href="#" class="darken-2 text-dark text-bold-700">30 Hari Terakhir</a></span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Bordered striped end -->
                <!-- Chat and Recent Projects -->
                {{-- <div class="row ">
                    <div class="col-lg-6 col-md-12">
                        <h5 class="card-title text-bold-700 my-2">User Terbaru</h5>
                        <div class="card">
                            <div class="card-content">
                                <div id="recent-projects" class="media-list position-relative">
                                    <div class="table-responsive">
                                        <table class="table table-padded table-xl mb-0" id="recent-project-table">
                                            <thead>
                                                <tr>
                                                    <th>Phone</th>
                                                    <th>Nama</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h5 class="card-title text-bold-700 my-2">Membership Terbaru</h5>

                        <div class="card">
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-padded table-xl mb-0" id="recent-project-table">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Paket</th>
                                                <th>Tanggal Pembelian</th>
                                                <th>Batas Pembayaran</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    </div>
@endsection
