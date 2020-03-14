<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggaran;
use Validator;
use Illuminate\View\View;
use DB;
use Illuminate\Support\Facades\Storage;

// impor model file
use App\File;
use Illuminate\Http\RedirectResponse;
use phpDocumentor\Reflection\Types\Nullable;

class k_anggaranController extends Controller
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
        return view('keuangan.laporananggaran', compact('files'));
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
        $anggaran = Anggaran::findOrFail($id);
        return view('keuangan.e_anggaran',compact('anggaran'));
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
        $anggaran = Anggaran::findOrFail($id);
        $this->validate(request(),[
            'status_id'=>'required',
        ]);
        $anggaran->status_id = $request->status_id;
        $anggaran->update();
        return redirect('k_anggaran')->with('message', 'Anggaran berhasil di update');
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
