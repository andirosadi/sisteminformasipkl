<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Pendaftar;
use App\Divisi;
use Illuminate\Http\Request;
use Validator;
use DB;
use PDF;

class nilaiPesertaController extends Controller
{
    public function index()
    {
        $userID = \auth('pendaftar')->user()->getAuthIdentifier();
        $nilai = DB::table('nilais')
            ->join('pendaftars', 'nilais.pendaftar_id', '=', 'pendaftars.id')
            ->select('nilais.*', 'pendaftars.name', 'pendaftars.nim', 'pendaftars.jurusan', 'pendaftars.sekolah')
            ->where('pendaftars.id', '=', $userID)
            ->get();
        return view('peserta.nilai', compact('nilai'));
    }

    public function cetaknilaipeserta_pdf()
    {
        $userID = \auth('pendaftar')->user()->getAuthIdentifier();
        $nilai = DB::table('nilais')
            ->join('pendaftars', 'nilais.pendaftar_id', '=', 'pendaftars.id')
            ->join('divisi', 'pendaftars.divisi_id', '=', 'divisi.id')
            ->select('nilais.*', 'pendaftars.name', 'pendaftars.nim', 'pendaftars.jurusan', 'pendaftars.sekolah', 'divisi.namadivisi')
            ->where('pendaftars.id', '=', $userID)
            ->get();
        $pdf = PDF::loadview('peserta.cetaknilai',compact('nilai'));
        return $pdf->stream();
    }

    public function formtambahnilai($id)
    {
        $nilai = Pendaftar::find($id);
        return view('mentor.c_nilai', compact('nilai'));
    }
    public function tambahnilai(Request $request, $pesertaid)
    {
        $peserta = Pendaftar::find($pesertaid);
        $nilai = new Nilai();
        $nilai->pendaftar_id = $peserta;
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
        return redirect('m_peserta', compact('nilai'))->with('message', 'Nilai berhasil di tambah');
    }
}
