<?php

namespace App\Http\Controllers;

use App\Kuota;
use Illuminate\Http\Request;
use App\User;
use App\Divisi;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class a_kuotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = DB::table('kuotas')
            ->join('divisi', 'kuotas.divisi_id', '=', 'divisi.id')
            ->join('statuskuota', 'kuotas.statuskuota_id', '=', 'statuskuota.id')
            ->select('kuotas.*', 'statuskuota.status_kuota', 'divisi.namadivisi')
            ->get();
        return view('admin.kuota',['admin'=>$admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.c_kuota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jumlahkuota' => ['required'],
            'divisi_id' => ['unique:users'],
        ]);
        $kuota = new Kuota();
        $kuota->jumlahkuota = $request->jumlahkuota;
        $kuota->divisi_id = $request->divisi_id;
        $kuota->save();
        return redirect()->route('a_kuota.index')->with('message', 'Kuota berhasil diajukan!');
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
        $kuota = Kuota::find($id);
        $kuota->delete();
        return redirect('a_kuota')->with('message','Kuota berhasil di hapus');
    }
}
