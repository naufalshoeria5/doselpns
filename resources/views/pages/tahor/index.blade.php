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
                                    <h4 class="text-center">SISTEM DOSIR ELETRONIK PNS</h4>
                                </div>
                            </div>
                        </div>

                        <div class="content-body">
                            <div class="row">
                                <div class="col-12">
                                    <form action="">
                                        @csrf
                                        <div class="card">
                                            <div class="card-content collapse show">
                                                <div class="card-body card-dashboard">
                                                    <div class="form-body">
                                                        <h4 class="form-section"><i class="ft-file">{{ $title }}</i></h4>
                                                        
                                                        <div class="form-group row">
                                                            <label for="nip" class="col-md-3 col-sm-12 label-control">Nomor Induk Pegawai (NIP) <sup class="text-danger">*</sup></label>
                                                            <div class="col-md-7 col-sm-12">
                                                                <div class="input-group">
                                                                    <input type="number" id="nip" class="form-control" placeholder="Masukan NIP Pegawai" name="nip" value="{{ old('nip') }}" required>
                                                                </div>
                                                            </div>
                                                            <button class="col-md-1 btn btn-primary" type="button" id="btn-cari">Cari</button>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="nama" class="col-md-3 col-sm-12 label-control">Nama</label>
                                                            <div class="col-md-9 col-sm-12">
                                                                <div class="input-group">
                                                                    <input type="text" name="nama" id="nama" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="pangkat" class="col-md-3 col-sm-12 label-control">Pangkat</label>
                                                            <div class="col-md-9 col-sm-12">
                                                                <div class="input-group">
                                                                    <input type="text" name="pangkat" id="pangkat" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="kesatuan" class="col-md-3 col-sm-12 label-control">Kesatuan</label>
                                                            <div class="col-md-9 col-sm-12">
                                                                <div class="input-group">
                                                                    <input type="text" name="kesatuan" id="kesatuan" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="tanggal_lahir" class="col-md-3 col-sm-12 label-control">Tanggal Lahir</label>
                                                            <div class="col-md-9 col-sm-12">
                                                                <div class="input-group">
                                                                    <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" disabled>
                                                                </div>
                                                            </div>
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
    $('#btn-cari').on('click',function(){
        const nip = $('#nip').val();
        console.log(nip);
    })
    </script>
@endsection