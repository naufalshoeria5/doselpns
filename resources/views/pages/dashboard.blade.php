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
                                        <h4 class="font-large-2 text-bold-400 text-info">
                                           11 <i class="ft-user float-right"></i>
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
                                        Divisi
                                    </h4>
                                </div>
                                <div class="card-content collapse show height-100">
                                    <div class="card-body p-2">
                                        <h4 class="font-large-2 text-bold-400 text-info">
                                            11 <i class="ft-check-circle float-right"></i>
                                        </h4>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 col-lg-3">
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
                    </div>
                    {{-- <div class="col-md-12 col-lg-3">
                        <a href="#">
                            <div class="card pull-up  rounded-0">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Total Membership
                                    </h4>
                                </div>
                                <div class="card-content collapse show height-100">
                                    <div class="card-body p-2">
                                        <h4 class="font-large-2 text-bold-400 text-info">
                                            111<i class="ft-award float-right"></i>
                                        </h4>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div> --}}
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
