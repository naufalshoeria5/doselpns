@extends('layouts.base')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Tambah Data Pegawai</h4>
                                </div>
                            </div>
                        </div>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-12">
                                    @if (@$pegawai->exists)
                                        <form id="modalForm" class="forms-sample" enctype="multipart/form-data"
                                            method="POST" action="{{ route('pegawai.update', $pegawai) }}" novalidate>
                                            @method('put')
                                        @else
                                            <form id="modalForm" class="forms-sample" enctype="multipart/form-data"
                                                method="POST" action="{{ route('pegawai.store') }}">
                                    @endif
                                    @csrf
                                    <div class="card">
                                        <div class="card-content collapse show">
                                            <div class="card-body card-dashboard">

                                                <div class="form-body">
                                                    <h4 class="form-section"><i class="ft-clipboard"></i>
                                                        {{ $title }}
                                                    </h4>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput5">
                                                            NIP <sup class="text-required">*</sup>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="text" id="nama"
                                                                    class="form-control @error('nip') is-invalid @enderror"
                                                                    placeholder="Masukan Nomor Induk Pegawai" name="nip"
                                                                    required value="{{ old('nip', @$pegawai->nip) }}">

                                                            </div>
                                                            @error('nip')
                                                                <span
                                                                    class="text-danger">{{ $errors->first('nip') }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput5">
                                                            Nama Pegawai <sup class="text-required">*</sup>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="text" id="nama"
                                                                    class="form-control @error('nama') is-invalid @enderror"
                                                                    placeholder=" Nama pegawai" name="nama" required
                                                                    value="{{ old('nama', @$pegawai->nama) }}">

                                                            </div>
                                                            @error('nama')
                                                                <span
                                                                    class="text-danger">{{ $errors->first('nama') }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput5">
                                                            Pangkat <sup class="text-required">*</sup>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="text" id="pangkat"
                                                                    class="form-control @error('pangkat') is-invalid @enderror"
                                                                    placeholder="Masukan Pangkat" name="pangkat" required
                                                                    value="{{ old('pangkat', @$pegawai->pangkat) }}">

                                                            </div>
                                                            @error('pangkat')
                                                                <span
                                                                    class="text-danger">{{ $errors->first('pangkat') }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput5">
                                                            Kesatuan <sup class="text-required">*</sup>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="text" id="kesatuan"
                                                                    class="form-control @error('kesatuan') is-invalid @enderror"
                                                                    placeholder="Masukan Kesatuan" name="kesatuan" required
                                                                    value="{{ old('kesatuan', @$pegawai->kesatuan) }}">
                                                            </div>
                                                            @error('kesatuan')
                                                                <span
                                                                    class="text-danger">{{ $errors->first('kesatuan') }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput5">
                                                            Tempat / Tanggal Lahir <sup class="text-required">*</sup>
                                                        </label>
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control" value="{{ old('tempat_lahir', @$pegawai->tempat_lahir) }}" name="tempat_lahir"
                                                                placeholder="Masukan Tempat Lahir">
                                                            @error('tempat_lahir')
                                                                <span
                                                                    class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="date" class="form-control" value="{{ old('tanggal_lahir', @$pegawai->tanggal_lahir) }}" name="tanggal_lahir">
                                                            @error('tanggal_lahir')
                                                                <span
                                                                    class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @if (@$pegawai->exists)
                                        <div class="card">
                                            <div class="card-content collapse show">
                                                <div class="card-body">
                                                    <div class="form-body">
                                                        <h4 class="form-section">
                                                            Berkas Pegawai
                                                        </h4>
                                                        <div class="table-responsive">
                                                            <table
                                                                class="table table-striped table-bordered zero-configuration datatable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Nama Berkas</th>
                                                                        <th>Jenis</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php
                                                                        $i = 1;
                                                                    @endphp
                                                                    @foreach ($pegawai->berkas as $item)
                                                                        <tr>
                                                                            <td class="text-center" style="width: 8%">{{ $i++ }}</td>
                                                                            <td>{{ $item->nama_berkas }}</td>
                                                                            <td>{{ App\Helpers\DoselHelper::jenis_berkas($item->jenis) }}</td>
                                                                            <td class="text-center" style="width: 8%">
                                                                                <a href="{{ asset('storage/' . $item->nama_berkas) }}"
                                                                                    target="_blank"
                                                                                    class="btn btn-primary">
                                                                                    <i class="ft-download"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="card">
                                        <div class="card-content collapse show">
                                            <div class="card-body">
                                                <div class="form-body">
                                                    <h4 class="form-section"><i class="ft-file"></i>
                                                        Tambah Berkas
                                                    </h4>
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    <div id="perulangan-form">
                                                        <div class="row"
                                                            id="{{ 'berkas_reapeater' . $i . '' }}">
                                                            <div class="form-group col-md-5 col-sm-12">
                                                                <label for="file">File</label>
                                                                <input class="form-control" id="file" name="file[]"
                                                                    type="file" multiple>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="jenis">Jenis </label>
                                                                <select class="form-control" name="jenis[]" id="jenis">
                                                                    <option value="#" selected disabled>Pilih Jenis</option>
                                                                    <option value="1">Surat Lamaran [01]</option>
                                                                    <option value="2">Akte Kelahiran YBS [02]</option>
                                                                    <option value="3">Akte Kelahiran Anak [03]</option>
                                                                    <option value="4">Daftar Riwayat Hidup [04]</option>
                                                                    <option value="5">Ijazah/STTB/Dikum [05]</option>
                                                                    <option value="6">SKCK [06]</option>
                                                                    <option value="7">Kep Capeg [07]</option>
                                                                    <option value="8">KGB [08]</option>
                                                                    <option value="9">Karis/Karsu [09]</option>
                                                                    <option value="10">Kep PeDaJa [10]</option>
                                                                    <option value="11">Kartu Asabri [11]</option>
                                                                    <option value="12">Sumpah Pengangkatan [12]</option>
                                                                    <option value="13">Kartu Pegawai [13]</option>
                                                                    <option value="14">Surat Nikah/FC Akta Nikah [14]
                                                                    </option>
                                                                    <option value="15">Kep Tanda Kehormatan [15]</option>
                                                                    <option value="16">Ijazah
                                                                        Prajab/Diklatpim/Latsarmil/Sus/Dikalih [16]</option>
                                                                    <option value="17">Surat Tanda Lulus Ujian Dinas/KPPI
                                                                        [17]</option>
                                                                    <option value="18">PPK [18]</option>
                                                                    <option value="19">Skep Pengangkatan PNS [19]</option>
                                                                    <option value="20">Kep/Sprin [20]</option>
                                                                    <option value="21">Kep Pemberian Hukuman [21]</option>
                                                                    <option value="22">Laporan PerKep [22]</option>
                                                                    <option value="23">Surat Kematian suami/istri/anak [23]
                                                                    </option>
                                                                    <option value="24">Kep Pemberhentian / Skorsing [24]
                                                                    </option>
                                                                    <option value="25">Kep Pengaktifan Kembali [25]</option>
                                                                    <option value="26">Kep Perubahan Nama [26]</option>
                                                                    <option value="27">Kep Tambah Gelar [27]</option>
                                                                    <option value="28">Kep Pindah Agama [28]</option>
                                                                    <option value="29">Kep Kenaikan Pangkat [29]</option>
                                                                    <option value="30">Kep Ralat [30]</option>
                                                                    <option value="31">Kep Pensiun [31]</option>
                                                                    <option value="32">Dokumen Tekstual Lain [32]</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-3 col-sm-12 text-center mt-2">
                                                                <button type="button" class="btn btn-primary " id="add">
                                                                    Tambah </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions right">
                                        <a href="{{ route('pegawai.index') }}" class="btn btn-danger mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Tambah
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            let element = $('#perulangan-form div:last-child').attr('id');
            let rowId = element.slice(16);
            let i = rowId;
            $('#add').click(function() {
                i++;
                $('#perulangan-form').append('<div class="row" id="berkas_reapeater' + i + '">\
                        <div class="form-group col-md-5 col-sm-12 ">\
                            <label for="file">File</label>\
                            <input class="form-control" name="file[]" id="file" type="file" multiple>\
                        </div>\
                        <div class="form-group  col-md-4 col-sm-12">\
                            <label for="jenis">Jenis</label>\
                            <select class="form-control" name="jenis[]" id="jenis">\
                                <option value="#" selected disabled>Pilih Jenis</option>\
                                <option value="1">Surat Lamaran [01]</option>\
                                <option value="2">Akte Kelahiran YBS [02]</option>\
                                <option value="3">Akte Kelahiran Anak [03]</option>\
                                <option value="4">Daftar Riwayat Hidup [04]</option>\
                                <option value="5">Ijazah/STTB/Dikum [05]</option>\
                                <option value="6">SKCK [06]</option>\
                                <option value="7">Kep Capeg [07]</option>\
                                <option value="8">KGB [08]</option>\
                                <option value="9">Karis/Karsu [09]</option>\
                                <option value="10">Kep PeDaJa [10]</option>\
                                <option value="11">Kartu Asabri [11]</option>\
                                <option value="12">Sumpah Pengangkatan [12]</option>\
                                <option value="13">Kartu Pegawai [13]</option>\
                                <option value="14">Surat Nikah/FC Akta Nikah [14] </option>\
                                <option value="15">Kep Tanda Kehormatan [15]</option>\
                                <option value="16">Ijazah Prajab/Diklatpim/Latsarmil/Sus/Dikalih [16]</option>\
                                <option value="17">Surat Tanda Lulus Ujian Dinas/KPPI [17]</option>\
                                <option value="18">PPK [18]</option>\
                                <option value="19">Skep Pengangkatan PNS [19]</option>\
                                <option value="20">Kep/Sprin [20]</option>\
                                <option value="21">Kep Pemberian Hukuman [21]</option>\
                                <option value="22">Laporan PerKep [22]</option>\
                                <option value="23">Surat Kematian suami/istri/anak [23]</option>\
                                <option value="24">Kep Pemberhentian / Skorsing [24]</option>\
                                <option value="25">Kep Pengaktifan Kembali [25]</option>\
                                <option value="26">Kep Perubahan Nama [26]</option>\
                                <option value="27">Kep Tambah Gelar [27]</option>\
                                <option value="28">Kep Pindah Agama [28]</option>\
                                <option value="29">Kep Kenaikan Pangkat [29]</option>\
                                <option value="30">Kep Ralat [30]</option>\
                                <option value="31">Kep Pensiun [31]</option>\
                                <option value="32">Dokumen Tekstual Lain [32]</option>\
                            </select>\
                        </div>\
                        <div class="form-group col-md-3 col-sm-12 text-center mt-2">\
                            <button type="button" class="btn btn-danger btn_remove" id="' +
                    i + '">\
                            <i class="ft-x"></i> </button>\
                        </div>\
                    </div>')
            });

            $(document).on('click', '.btn_remove', function() {
                let button_id = $(this).attr("id");
                $('#berkas_reapeater' + button_id + '').remove();
            })
        })
    </script>
@endsection
