<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Pendaftar;
use Illuminate\Http\Request;
use App\User;
use App\Divisi;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;
use PDF;

class   m_nilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nilai = DB::table('nilais')
            ->select('nilais.pendaftar_id')
            ->get();
        $peserta = DB::table('pendaftars')
            ->join('status', 'pendaftars.status_id', '=', 'status.id')
            ->join('divisi', 'pendaftars.divisi_id', '=', 'divisi.id')
            ->select('pendaftars.*', 'status.aktivasi', 'divisi.namadivisi')
            ->where(['divisi.id' => Auth::user()->divisi_id,
                'status.id' => 1])
            ->get();
        return view('mentor.c_nilai', compact('peserta', 'nilai')) ;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idpeserta
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'pendaftar_id' => 'unique:nilais'
        ]);
        $nilai = new Nilai();
        $nilai->pendaftar_id = $request->pendaftar_id;
        $nilai->penulisanlaporan = $request->penulisanlaporan;
        $nilai->penguasaanmateri = $request->penguasaanmateri;
        $nilai->penyelesaianmakalah = $request->penyelesaianmakalah;
        $nilai->kemampuananalisa = $request->kemampuananalisa;
        $nilai->tanggungjawab = $request->tanggungjawab;
        $nilai->kehadiran = $request->kehadiran;
        $nilai->sikap = $request->sikap;
        $nilai->pengetahuan = $request->pengetahuan;
        $nilai->inisiatif = $request->inisiatif;
        $nilai->kerjasama = $request->kerjasama;
        $nilai->kepemimpinan = $request->kepemimpinan;
        $nilai->potensi = $request->potensi;
        $nilai->save();
        return redirect('m_nilai/'.$nilai->pendaftar_id)->with('message', 'Nilai berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nilai = DB::table('nilais')
            ->join('pendaftars', 'nilais.pendaftar_id', '=', 'pendaftars.id')
            ->select('pendaftars.*', 'nilais.*')
            ->where(['pendaftars.id' => $id])
            ->get();
        return view('mentor.nilai',compact('nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $nilai =Nilai::where('id',$id)->first()
//        $nilai = Nilai::findOrFail($id)
        $nilai = DB::table('nilais')
            ->join('pendaftars', 'nilais.pendaftar_id', '=', 'pendaftars.id')
            ->select('pendaftars.*', 'nilais.*')
            ->where(['nilais.id' => $id])
            ->get();
        return view('mentor.e_nilai',compact('nilai'));
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
//        $nilai =Nilai::where('id',$id)->first();
        $nilai = Nilai::findOrFail($id);
        $nilai->penulisanlaporan = $request->penulisanlaporan;
        $nilai->penguasaanmateri = $request->penguasaanmateri;
        $nilai->penyelesaianmakalah = $request->penyelesaianmakalah;
        $nilai->kemampuananalisa = $request->kemampuananalisa;
        $nilai->tanggungjawab = $request->tanggungjawab;
        $nilai->kehadiran = $request->kehadiran;
        $nilai->sikap = $request->sikap;
        $nilai->pengetahuan = $request->pengetahuan;
        $nilai->inisiatif = $request->inisiatif;
        $nilai->kerjasama = $request->kerjasama;
        $nilai->kepemimpinan = $request->kepemimpinan;
        $nilai->potensi = $request->potensi;
        $nilai->update();
        return redirect('m_nilai/'.$nilai->pendaftar_id)->with('message', 'Nilai berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();
        return redirect('m_peserta')->with('message', 'Nilai berhasil di hapus');
    }
}
