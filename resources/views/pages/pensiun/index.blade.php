@extends('layouts.base')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="text-center">SISTEM DOSIR ELETRONIK PNS</h4>
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <div class="row">
                                <div class="col-12 col-md-12 col-sm-12">
                                    <form action="">
                                        @csrf
                                        <div class="card">
                                            <div class="card-content collapse show">
                                                <div class="card-body card-dashboard">
                                                    <div class="form-body">
                                                        <h4 class="form-section">
                                                            {{ $title }}
                                                        </h4>

                                                        <div class="form-group row">
                                                            <label for="nip" class="col-md-3 col-sm-12 label-control">
                                                                Nomor Induk Pegawai (NIP) <sup
                                                                    class="text-danger">*</sup>
                                                            </label>
                                                            <div class="col-md-7 col-sm-12">
                                                                <div class="input-group">
                                                                    <input type="number" id="nip" class="form-control"
                                                                        placeholder="Masukan NIP Pegawai" name="nip"
                                                                        value="{{ old('nip') }}" required>
                                                                </div>
                                                            </div>
                                                            <button class="col-md-1 col-sm-12 btn btn-primary" type="button"
                                                                id="btn-cari">Cari</button>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="nama" class="col-md-3 col-sm-12">Nama</label>
                                                            <div class="col-md-9 col-sm-12">
                                                                <div class="input-group">
                                                                    <input type="text" name="nama" id="nama"
                                                                        class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="pangkat"
                                                                class="col-md-3 col-sm-12 label-control">Pangkat</label>
                                                            <div class="col-md-9 col-sm-12">
                                                                <div class="input-group">
                                                                    <input type="text" name="pangkat" id="pangkat"
                                                                        class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="kesatuan"
                                                                class="col-md-3 col-sm-12 label-control">Kesatuan</label>
                                                            <div class="col-md-9 col-sm-12">
                                                                <div class="input-group">
                                                                    <input type="text" name="kesatuan" id="kesatuan"
                                                                        class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="tanggal_lahir"
                                                                class="col-md-3 col-sm-12 label-control">
                                                                Tempat / Tanggal Lahir
                                                            </label>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="input-group">
                                                                    <input type="text" name="tempat_lahir" id="tempat_lahir"
                                                                        class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 col-sm-12">
                                                                <div class="input-group">
                                                                    <input type="text" name="tanggal_lahir"
                                                                        id="tanggal_lahir" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-content collapse show">
                                                <div class="card-body">
                                                    <div class="form-body">
                                                        <h4 class="form-section">
                                                            <i class="ft-file"></i> Berkas Pegawai
                                                        </h4>
                                                        <div class="table-responsive">
                                                            <table
                                                                class="table table-striped table-bordered zero-configuration">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 8%" class="text-center">No</th>
                                                                        <th>Nama Berkas</th>
                                                                        <th>Jenis</th>
                                                                        <th style="width: 8%">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="berkas">
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
        let base_url = {!! json_encode($url) !!}
        const url = base_url + '/berkas/'
        $('#btn-cari').on('click', function() {
            const nip = $('#nip').val();

            $.ajax({
                url: 'getPegawai/' + nip,
                type: 'GET',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function(data) {
                    if (data.nama != null) {
                        $.ajax({
                            url: 'getBerkas/pensiun/' + data.id,
                            type: 'GET',
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            dataType: "json",
                            success: function(berkas) {
                                if (berkas.length !== 0) {
                                    let i = 1;
                                    $.each(berkas, function(key, item) {
                                        $('#berkas').append('\
                                                                <tr>\
                                                                    <td class="text-center" style="width: 8%">' + i + '</td>\
                                                                    <td>' + item.nama_berkas + '</td>\
                                                                    <td>' + cekJenis(item.jenis) + '</td>\
                                                                    <td>\
                                                                        <a href="' + url + item.nama_berkas + '"\
                                                                            target="_blank" class="btn btn-primary"><i\
                                                                                class="ft-download"></i></a>\
                                                                    </td>\
                                                                </tr>\
                                                                ');
                                        i++;
                                    })
                                    $('#nama').val(data.nama)
                                    $('#pangkat').val(data.pangkat)
                                    $('#kesatuan').val(data.kesatuan)
                                    $('#tempat_lahir').val(data.tempat_lahir)
                                    $('#tanggal_lahir').val(data.tanggal_lahir)
                                } else {
                                    $('#nama').val(data.nama)
                                    $('#pangkat').val(data.pangkat)
                                    $('#kesatuan').val(data.kesatuan)
                                    $('#tempat_lahir').val(data.tempat_lahir)
                                    $('#tanggal_lahir').val(data.tanggal_lahir)
                                }
                            }

                        })



                    } else {
                        console.log('NIP Tidak Ada');
                    }
                }
            })
        })

        function cekJenis(params) {
            switch (params) {
                case 1:
                    return 'Surat Lamaran';
                    break;
                case 2:
                    return 'Akte Kelahiran Ybs'
                    break;
                case 3:
                    return 'Akte Kelahiran Anak';
                    break;
                case 4:
                    return 'Daftar Riwayat Hidup';
                    break;
                case 5:
                    return 'Ijazah';
                    break;
                case 6:
                    return 'SKCK';
                    break;
                case 7:
                    return 'Kep Capeg';
                    break;
                case 8:
                    return 'Kenaikan Gaji Berkala';
                    break;
                case 9:
                    return 'Karis/Karsu';
                    break;
                case 10:
                    return 'Kep Penempatan Jabatan';
                    break;
                case 11:
                    return 'Kartu ASABRI';
                    break;
                case 12:
                    return 'Sumpah Pengangkatan PNS';
                    break;
                case 13:
                    return 'Kartu Pegawai';
                    break;
                case 14:
                    return 'Surat Izin Nikah';
                    break;
                case 15:
                    return 'Kep Tanda Kehormatan';
                    break;
                case 16:
                    return 'Ijazah Prajab/Diklatpim/Latsarmil/Sus/Dikalih';
                    break;
                case 17:
                    return 'STLUD/KPPI';
                    break;
                case 18:
                    return 'Penilaian Prestasi Kerja (PPK)';
                    break;
                case 19:
                    return 'Skep Pengangkatan PNS';
                    break;
                case 20:
                    return 'KEP/Sprin Perpindahan';
                    break;
                case 21:
                    return 'Kep Pemberian Hukuman';
                    break;
                case 22:
                    return 'Laporan Perkembangan kepri';
                    break;
                case 23:
                    return 'Surat Kematian';
                    break;
                case 24:
                    return 'Kep Pemberhentian/Skorsing';
                    break;
                case 25:
                    return 'Kep Pengaktifan';
                    break;
                case 26:
                    return 'Kep Perubahan Nama';
                    break;
                case 27:
                    return 'Kep Tambah Gelar';
                    break;
                case 28:
                    return 'Kep Pindah Agama';
                    break;
                case 29:
                    return 'Kep Kenaikan/Turun Pangkat';
                    break;
                case 30:
                    return 'Kep Ralat';
                    break;
                case 31:
                    return 'Kep Pensiun';
                    break;
                case 32:
                    return 'Dokumen Tekstual Lain';
                    break;
            }
        }
    </script>
@endsection
