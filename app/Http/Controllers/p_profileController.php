<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;


class p_profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesertapkl = DB::table('pendaftars')
            ->join('status', 'pendaftars.status_id', '=', 'status.id')
            ->join('divisi', 'pendaftars.divisi_id', '=', 'divisi.id')
            ->select('pendaftars.*', 'divisi.namadivisi', 'status.aktivasi')
            ->where('pendaftars.id', '=', \auth('pendaftar')->id())
            ->get();
        return view('peserta.pesertapklprofile', compact('pesertapkl'));
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
        $pesertapkl = Pendaftar::findOrFail($id);
        return view('peserta.e_pesertapklprofile',compact('pesertapkl'));
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
        $pesertapkl = Pendaftar::findOrFail($id);
        $this->validate(request(),[
            'name'=>'required',
            'nim'=>'required',
            'email'=>'required',
            'sekolah'=>'required',
            'fakultas'=>'required',
            'jurusan'=>'required',
        ]);
        $pesertapkl->name = $request->name;
        $pesertapkl->nim = $request->nim;
        $pesertapkl->email = $request->email;
        $pesertapkl->sekolah = $request->sekolah;
        $pesertapkl->fakultas = $request->fakultas;
        $pesertapkl->jurusan = $request->jurusan;
        $pesertapkl->update();
        return redirect('p_profile')->with('message', 'Profile berhasil di update');
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
