@extends('layouts.base')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before">
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Data Pegawai</h4>
                                    <a href="" class="btn btn-info">
                                        <div class="d-flex justify-content-between align-items-center w-full ">
                                            <span class="mr-1">Tambah Data</span>
                                            <i class="ft-user-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Pangkat</th>
                                                    <th>Jabatan</th>
                                                    <th>Tanggal Lahir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr> 
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">6</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">7</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th class="text-center">8</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        {{-- <table class="table-striped table-bordered datatable">
                                            <thead>
                                                <tr>
                                                    <th class="text-left align-middle" style="width: 7%">
                                                        #
                                                    </th>
                                                    <th>
                                                        NIK
                                                    </th>
                                                    <th>
                                                        Nama
                                                    </th>
                                                    <th>
                                                        Jabatan
                                                    </th>
                                                    <th>
                                                        Bagian
                                                    </th>
                                                    <th>ab</th>
                                                    <th>b</th>
                                                    <th>c</th>
                                                    <th>d</th>
                                                    <th>e</th>
                                                    <th class="text-center">
                                                        Aksi
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @for ($i = 1; $i <= 100; $i++)                                                    
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>14132</td>
                                                    <td>Naufal Hidayah Surya</td>
                                                    <td>Letkol</td>
                                                    <td>Bagian</td>
                                                    <td>a</td>
                                                    <td>a</td>
                                                    <td>a</td>
                                                    <td>a</td>
                                                    <td>a</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-primary">?</button>
                                                        <button class="btn btn-danger">?</button>
                                                    </td>
                                                </tr>
                                                @endfor
                                            </tbody>
                                        </table> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection