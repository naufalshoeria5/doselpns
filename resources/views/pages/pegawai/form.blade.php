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
                                        <div class="card">
                                            <div class="card-content collapse show">
                                                <div class="card-body card-dashboard">
                                                    @if (@$pegawai->exists)
                                                        <form id="modalForm" class="forms-sample" enctype="multipart/form-data"
                                                            method="POST" action="{{ route('pegawai.update', $pegawai) }}" novalidate>
                                                            @method('put')
                                                        @else
                                                            <form id="modalForm" class="forms-sample" enctype="multipart/form-data"
                                                                method="POST" action="{{ route('pegawai.store') }}" novalidate>
                                                    @endif
                                                    {{ csrf_field() }}
                                                    <div class="form-body">
                                                        <h4 class="form-section"><i class="ft-clipboard"></i> {{ $title }}
                                                        </h4>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="projectinput5">
                                                                NIP <sup class="text-required">*</sup>
                                                            </label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <input type="text" id="nama"
                                                                        class="form-control @error('nip') is-invalid @enderror"
                                                                        placeholder="Masukan Nomor Induk Pegawai" name="nip" required
                                                                        value="{{ old('nip', @$pegawai->nip) }}">
                
                                                                </div>
                                                                @error('nip')
                                                                    <span class="text-danger">{{ $errors->first('nip') }}</span>
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
                                                                        placeholder=" Nama Kebijakan" name="nama" required
                                                                        value="{{ old('nama', @$kebijakans->nama) }}">
                
                                                                </div>
                                                                @error('nama')
                                                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
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
                                                                    <span class="text-danger">{{ $errors->first('pangkat') }}</span>
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
                                                                    <span class="text-danger">{{ $errors->first('kesatuan') }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="projectinput5">
                                                                Tanggal Lahir <sup class="text-required">*</sup>
                                                            </label>
                                                            <div class="col-md-9">
                                                                <input type="date" class="form-control" name="tanggal_lahir">
                                                                @error('tanggal_lahir')
                                                                    <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                                                @enderror
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
            </div>
        </div>
    </div>
@endsection