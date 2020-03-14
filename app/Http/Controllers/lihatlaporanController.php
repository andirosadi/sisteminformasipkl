<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporanpkl;
use App\Pendaftar;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use DB;

class lihatlaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID = \auth('pendaftar')->user()->getAuthIdentifier();
        $laporanpkl = DB::table('laporanpkls')
            ->join('pendaftars','laporanpkls.pendaftar_id','pendaftars.id')
            ->select('laporanpkls.*')
            ->where('pendaftars.id','=',$userID)
            ->get();
        return view('peserta.laporanpkl', compact('laporanpkl'));
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
        $laporanpkl = Laporanpkl::findOrFail($id);
        return view('peserta.e_laporanpkl', compact('laporanpkl'));
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
        $laporanpkl = Laporanpkl::findOrFail($id);
        $this->validate($request,[
            'judul' =>'nullable|max:100',
            'laporan' =>'required|file|max:5000'
        ]);
        $laporan = $request->file('laporan');
        $laporan->getClientOriginalName();
        $path = $laporan->store('public/laporan_pkl');
        $laporanpkl -> judul = $request->judul;
        $laporanpkl -> laporan = $path;
        $laporanpkl ->update();
        return redirect('laporanpkl/index')->with('message','Laporan PKL berhasil di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Laporanpkl::find($id);
        $user->delete();
        return redirect('laporanpkl/index')->with('message','Laporan PKL berhasil di hapus');
    }
}
