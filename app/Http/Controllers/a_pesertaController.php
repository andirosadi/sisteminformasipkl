<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use Illuminate\Http\Request;
use App\User;
use App\Divisi;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class a_pesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = DB::table('pendaftars')
            ->join('status', 'pendaftars.status_id', '=', 'status.id')
            ->join('divisi', 'pendaftars.divisi_id', '=', 'divisi.id')
            ->select('pendaftars.*', 'status.aktivasi', 'divisi.namadivisi')
            ->where('status.id', '=', 1)
            ->get();
        return view('admin.pesertalist',['admin'=>$admin]);
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
        $peserta = Pendaftar::findOrFail($id);
        return view('admin.e_peserta',compact('peserta'));
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
        $user = Pendaftar::findOrFail($id);
        $this->validate(request(),[
            'name'=>'required',
            'nim'=>'required',
            'email'=>'required',
            'sekolah'=>'required',
            'fakultas'=>'required',
            'jurusan'=>'required',
            'divisi_id'=>'required',
        ]);
        $user->name = $request->name;
        $user->nim = $request->nim;
        $user->email = $request->email;
        $user->sekolah = $request->sekolah;
        $user->fakultas = $request->fakultas;
        $user->jurusan = $request->jurusan;
        $user->divisi_id = $request->divisi_id;
        $user->update();
        return redirect('a_peserta')->with('message', 'Peserta PKL berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Pendaftar::find($id);
        $user->delete();
        return redirect('a_peserta')->with('message','Peserta PKL berhasil di hapus');
    }
}
