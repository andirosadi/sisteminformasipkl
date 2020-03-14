<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggaran;
use Illuminate\Notifications\Notification;
use Validator;
use Illuminate\View\View;
use DB;
use Illuminate\Support\Facades\Storage;
use App\File;

class a_laporananggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = DB::table('anggarans')
            ->join('statuskuota','anggarans.status_id','statuskuota.id')
            ->select('anggarans.*', 'statuskuota.status_kuota')
            ->get();
        return view('admin.laporananggaran',compact('files'));
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
        $files = Anggaran::findOrFail($id);
        return view('admin.e_anggaranpkl', compact('files'));
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
        $files = Anggaran::findOrFail($id);
        $this -> validate($request,[
            'judul' =>'required|max:100',
            'laporananggaran' =>'required|file|max:5000'
        ]);
        $anggaran =$request->file('laporananggaran');
        $anggaran->getClientOriginalName();
        $path = $anggaran->store('public/laporan_anggaran');
        $files -> judul = $request->judul;
        $files -> laporananggaran = $path;
        $files -> update();
        return redirect('a_laporananggaran')->with('message','Anggaran berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $files = Anggaran::find($id);
        $files->delete();
        return redirect('a_laporananggaran')->with('message','Anggaran berhasil di hapus');
    }
}
