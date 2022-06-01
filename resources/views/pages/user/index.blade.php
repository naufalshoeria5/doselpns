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
                                    <a href="{{ route('user.create') }}" class="btn btn-info">
                                        <div class="d-flex justify-content-between align-items-center w-full">
                                            <span class="mr-1">Tambah Data</span>
                                            <i class="ft-user-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="content-body collapse show">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration datatable">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10%;">No</th>
                                                    <th>Nip</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center" style="width: 10%;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbody">
                                                @foreach ($user as $item)
                                                    <tr>
                                                        <td class="text-center">{{ $loop->iteration }}</td>
                                                        <td>{{ $item->nip }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td class="text-center">
                                                            @if ($item->status == 1)
                                                                <span class="badge badge-success">Aktif</span>
                                                            @else
                                                                <span class="badge badge-info">Menunggu Konfirmasi</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-between">
                                                                <a href="" class="btn btn-sm btn-outline-success mr-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor" stroke-width="2">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                    </svg>
                                                                </a>
                                                                <button class="btn btn-sm btn-outline-danger delete"
                                                                    title="Hapus">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                    </svg>
                                                                </button>
                                                            </div>
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
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: true,
            timer: false
        });

        // toastr.success("a");
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif ()
    </script>
@endsection
