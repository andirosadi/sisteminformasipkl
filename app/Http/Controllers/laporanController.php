<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporanpkl;
use App\Pendaftar;
use App\Http\Controllers\Auth;
use DB;
use Validator;
use App\File;
use Illuminate\View\View;

class laporanController extends Controller
{
    function index()
    {
        $userID = \auth('pendaftar')->user()->getAuthIdentifier();
        $laporanpkl = DB::table('laporanpkls')
            ->join('pendaftars','laporanpkls.pendaftar_id','pendaftars.id')
            ->select('laporanpkls.*')
            ->where('pendaftars.id','=',$userID)
            ->get();
        return view('peserta.laporanpkl', compact('laporanpkl'));
    }

    function buatlaporan()
    {
        return view('peserta.c_laporanpkl');
    }


    function upload(Request $request)
    {
        $userID = \auth('pendaftar')->user()->getAuthIdentifier();
        $this -> validate($request,[
            'judul' =>'nullable|max:100',
            'laporan' =>'required|file|mimes:doc,docx,pdf|max:5000'
        ]);
        $uploadedFile = $request->file('laporan');
        $path = $uploadedFile->store('public/laporan_pkl');
        $laporanpkl = Laporanpkl::create([
            'pendaftar_id'=>$userID,
            'judul'=>$request->judul ?? $uploadedFile->getClientOriginalName(),
            'laporan'=> $path
        ]);
        return redirect('laporanpkl/index')->with('message','Laporan PKL berhasil di upload.');
    }
    public function edit($id)
    {
        $laporanpkl = Laporanpkl::findOrFail($id);
        return view('peserta.e_laporanpkl', compact('laporanpkl'));
    }

    public function update(Request $request, $id)
    {
        $laporanpkl = Laporanpkl::findOrFail($id);
        $uploadedFile =$request->file('laporan');
        $path = $uploadedFile->store('public/laporan_pkl');
        $laporanpkl->judul = $request->judul;
        $laporanpkl->laporan = $request->$path;
        $laporanpkl->update();
        return view('peserta.laporanpkl', compact('laporanpkl'));

    }

    public function destroy($id)
    {
        $user = Laporanpkl::find($id);
        $user->delete();
        return view('peserta.laporanpkl')->with('message','Laporan PKL berhasil di hapus');
    }
}
