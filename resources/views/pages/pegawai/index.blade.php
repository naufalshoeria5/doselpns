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
                                    <a href="{{ route('pegawai.create') }}" class="btn btn-info">
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
                                        <table class="table table-striped table-bordered zero-configuration datatable">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Pangkat</th>
                                                    <th>Kesatuan</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbody">
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($pegawais as $item)
                                                    <tr>
                                                        <td class="text-center table-tr"
                                                            data-url="{{ route('pegawai.show', $item->id) }}">
                                                            {{ $i++ }}</td>
                                                        <td class="table-tr"
                                                            data-url="{{ route('pegawai.show', $item->id) }}">
                                                            {{ $item->nip }}</td>
                                                        <td class="table-tr"
                                                            data-url="{{ route('pegawai.show', $item->id) }}">
                                                            {{ $item->nama }}</td>
                                                        <td class="table-tr"
                                                            data-url="{{ route('pegawai.show', $item->id) }}">
                                                            {{ $item->pangkat }}</td>
                                                        <td class="table-tr"
                                                            data-url="{{ route('pegawai.show', $item->id) }}">
                                                            {{ $item->kesatuan }}</td>
                                                        <td class="table-tr"
                                                            data-url="{{ route('pegawai.show', $item->id) }}">
                                                            {{ date('d M Y', strtotime($item->tanggal_lahir)) }}</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-danger delete"
                                                                value="{{ route('pegawai.destroy', $item->id) }}"
                                                                title="Hapus">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tfoot>
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

        $('body').on('click', '.delete', function() {
            let url = $(this).val()
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            Swal.fire({
                title:'Hapus?',
                text:'Setelah dihapus, tidak akan bisa dibatalkan!',
                icon:'warning',
                showCancelButton: true
            })
            .then((result) => {
                if (result.value) {
                    $(this).parent('td').parent('tr').remove();
                    $.ajax({
                        type: 'DELETE',
                        url: url,
                        dataType: 'json',
                        success: function(data){
                            swal.fire('Deleted!', 'Data Berhasil Dihapus','success')
                        },
                        error: function(data){
                            console.log('Error :' + data);
                        }
                    })
                }
            })
        })

        $('tbody.tbody').on('click', 'td.table-tr', function() {
            window.location = $(this).data("url");
        })
    </script>
@endsection
