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
                                    @if (@$user->exists)
                                        <h4>Edit Data Pegawai</h4>
                                        @php
                                            $aksi = 'Edit';
                                        @endphp
                                    @else
                                        <h4>Tambah Data Pegawai</h4>
                                        @php
                                            $aksi = 'Tambah';
                                        @endphp
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-12">
                                    @if (@$user->exists)
                                        <form id="modalForm" action="{{ route('user.update', $user) }}" method="POST"
                                            enctype="multipart/form-data" novalidate>
                                            @method('put')
                                        @else
                                            <form id="modalForm" action="{{ route('user.store') }}" method="POST"
                                                class="forms-sample" enctype="multipart/form-data" novalidate>
                                    @endif
                                    @csrf
                                    <div class="card">
                                        <div class="card-content collapse show">
                                            <div class="card-body card-dasboard">
                                                <div class="form-body">
                                                    <h4 class="form-section">
                                                        <i class="ft-clipboard"></i>
                                                        {{ $title }}
                                                    </h4>

                                                    <div class="form-group row">
                                                        <label for="" class="col-md-3 label-control">
                                                            NIP <sup class="text-danger">*</sup>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="text" id="nip"
                                                                    class="form-control @error('nip') is-invalid @enderror"
                                                                    placeholder="Masukan Nomor Induk Pegawai" name="nip"
                                                                    required value="{{ old('nip', @$user->nip) }}">
                                                            </div>
                                                            @error('nip')
                                                                <span
                                                                    class="text-danger">{{ $errors->first('nip') }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="" class="col-md-3 label-control">
                                                            Nama <sup class="text-danger"></sup>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="text" id="name"
                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                    placeholder="Masukan name" name="name" required
                                                                    value="{{ old('name', @$user->name) }}">
                                                            </div>
                                                            @error('name')
                                                                <span class="text-danger">
                                                                    {{ $errors->first('name') }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="" class="col-md-3 label-control">
                                                            Email <sup class="text-danger"></sup>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="text" id="email"
                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                    placeholder="Masukan Email" name="email" required
                                                                    value="{{ old('email', @$user->email) }}">
                                                            </div>
                                                            @error('email')
                                                                <span class="text-danger">
                                                                    {{ $errors->first('email') }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label for="" class="col-md-3 label-control">
                                                            Role User <sup class="text-danger"></sup>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <select name="role" id="" class="form-control" required>
                                                                    <option value="#" selected disabled>Pilih role User</option>
                                                                    @foreach ($role as $item)
                                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            @error('role')
                                                                <span class="text-danger">
                                                                    {{ $errors->first('role') }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="" class="col-md-3 label-control">
                                                            Passowrd <sup class="text-danger"></sup>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="password" id="password"
                                                                    class="form-control @error('password') is-invalid @enderror"
                                                                    placeholder="Masukan password" name="password" required
                                                                    value="{{ old('password') }}">
                                                            </div>
                                                            @error('password')
                                                                <span class="text-danger">
                                                                    {{ $errors->first('password') }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions right">
                                        <a href="{{ route('user.index') }}" class="btn btn-danger mr-1">
                                            <i class="ft-x"></i>Cancel
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o">{{ $aksi }}</i>
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
