<?php

namespace App\Http\Controllers;

use App\Models\BerkasPegawai;
use App\Models\Pegawai;
use Illuminate\Http\Request;

use File;

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
            'tempat_lahir'  => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);


        $validatedData = $request->validate([
            'file.*' => 'mimes:csv,txt,xlx,xls,pdf,xlsx'
        ]);

        if ($request->hasfile('file')) {
            $jenis  = $request->jenis;

            foreach ($request->file('file') as $key => $value) {
                $custom_file_name = $request->nip . '_' . $jenis[$key] . '.' . $value->extension();
                // $path = $request->file('file')->storeAs('directory_name',$custom_file_name);
                // $nama_file = $value->storeAs('uploads/berkasPegawai', $custom_file_name, 'public');


                $tujuan_upload = public_path('berkas');
                $value->move($tujuan_upload, $custom_file_name);

                BerkasPegawai::create([
                    'pegawai_id'    => $pegawai->id,
                    'nama_berkas'   => $custom_file_name,
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
        $pegawai = Pegawai::find($id);
        if ($pegawai->berkas) {
            $berkas = BerkasPegawai::where('pegawai_id', $id);
            if ($berkas) {
                foreach ($berkas->get() as $value) {
                    if (File::exists(public_path('berkas/' . $value->nama_berkas))) {
                        File::delete(public_path('berkas/' . $value->nama_berkas));
                    }
                }
                $berkas->delete();
            }
        }
        $pegawai->delete();
        return response()->json(['success' => 'Data Pegawai Telah Dihapus']);
    }

    public function getPegawai($nip)
    {
        $pegawai = Pegawai::where('nip', $nip)->first();

        return response()->json($pegawai);
    }

    public function berkasTahor($id)
    {
        $berkas = BerkasPegawai::where('pegawai_id', $id)
            ->whereIn('jenis', [4, 7, 10, 19, 29])
            ->get();

        return response()->json($berkas);
    }

    public function berkasPensiun($id)
    {
        $berkas = BerkasPegawai::where('pegawai_id', $id)
            ->where('jenis', [4, 12, 19, 10, 29])
            ->get();

        return response()->json($berkas);
    }

    public function berkasKenaikan($id)
    {
        $berkas = BerkasPegawai::where('pegawai_id', $id)
            ->where('jenis', [4, 12, 19, 10, 29])
            ->get();

        return response()->json($berkas);
    }

    public function hapusBerkas($id)
    {
        $berkas = BerkasPegawai::find($id);

        if (File::exists(public_path('berkas/' . $berkas->nama_berkas))) {
            File::delete(public_path('berkas/' . $berkas->nama_berkas));
        }
        $berkas->delete();

        return response()->json(['success' => 'Data Telah Dihapus']);
    }
}
