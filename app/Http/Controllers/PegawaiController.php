<?php

namespace App\Http\Controllers;

use App\Models\BerkasPegawai;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais   = Pegawai::all();

        $title      = 'Data Pegawai';
        return view('pages.pegawai.index', [
            'title'     => $title,
            'pegawais'  => $pegawais
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title      = 'Formulir Tambah Data Pegawai';
        return view('pages.pegawai.form', [
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pegawai    = Pegawai::create([
            'nip'           => $request->nip,
            'nama'          => $request->nama,
            'pangkat'       => $request->pangkat,
            'kesatuan'      => $request->kesatuan,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);


        $validatedData = $request->validate([
            'file.*' => 'mimes:csv,txt,xlx,xls,pdf,xlsx'
        ]);

        if ($request->hasfile('file')) {
            $jenis  = $request->jenis;

            foreach ($request->file('file') as $key => $value) {
                $nama_file = $value->storeAs('uploads/berkasPegawai', $request->nip . '_' . $jenis[$key], 'public');

                BerkasPegawai::create([
                    'pegawai_id'    => $pegawai->id,
                    'nama_berkas'   => $nama_file,
                    'jenis'         => $jenis[$key]
                ]);
            }
        }

        return redirect('pegawai')->withSuccess('Pegawai Telah Berhasil Diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        $title      = 'Formulir Edit Data Pegawai';

        return view('pages.pegawai.form', [
            'title'     => $title,
            'pegawai'   => $pegawai
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
