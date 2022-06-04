<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Role as ModelsRole;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();

        $title = 'Data User';
        return view('pages.user.index', [
            'title' => $title,
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data User';
        $role = ModelsRole::where('id', '!=', 1)->get();

        return view('pages.user.form', [
            'title' => $title,
            'role'  => $role
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = User::create([
            'nip' => $request->nip,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status'    => 1
        ]);

        if ($request->role == 2) {
            $user->assignRole('admin');
        }else{
            $user->assignRole('karyawan');
        }

        return redirect('user')->withSuccess('User Berhasil Ditambahkan');
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
        $user = User::find($id);
        $title = 'Edit Data User ' . $user->name;
        return view('pages.user.form', [
            'title' => $title,
            'user' => $user
        ]);
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
        $user = User::find($id);

        if ($user) {
            $user->nip = $request->nip;
            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->password) {
                $user->password = bcrypt($request->password);
            }
            $user->save();
        }
        return redirect('user')->withSuccess('User Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return response()->json(['success' => 'Data Telah Dihapus']);
    }
}
