<?php

namespace App\Http\Controllers;

use App\Models\BerkasPegawai;
use App\Models\Pegawai;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $title = 'Beranda';

        $date = Carbon::now()->subDays(30);
        $getTotalPegawai = Pegawai::all()->count();
        $getTotalBerkas = BerkasPegawai::all()->count();
        $getTotalBerkas30Day = BerkasPegawai::where('created_at', '>=', $date)->get()->count();
        $berkasTahor = BerkasPegawai::whereIn('jenis', [4, 7, 10, 19, 29])
            ->get()
            ->count();
        $berkasPensiun = BerkasPegawai::whereIn('jenis', [7, 8, 9, 10, 11, 13, 29, 32])
            ->get()
            ->count();
        $berkasKenaikan = BerkasPegawai::where('jenis', [5, 7, 10, 12, 13, 16, 17, 18, 19, 27])
            ->get()
            ->count();
        $user = User::all()->count();

        return view('pages.dashboard', [
            'title'     => $title,
            'totalPegawai' => $getTotalPegawai,
            'totalBerkas' => $getTotalBerkas,
            'totalBerkasBaru' => $getTotalBerkas30Day,
            'totalTahor'    => $berkasTahor,
            'totalPensiun' => $berkasPensiun,
            'totalKenaikan' => $berkasKenaikan,
            'totalUser'  => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
