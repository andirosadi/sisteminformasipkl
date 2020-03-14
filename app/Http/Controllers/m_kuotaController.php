<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Divisi;
use App\Role;
use App\Kuota;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;


class m_kuotaController extends Controller
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
            ->where('divisi.id','=', Auth::user()->divisi_id)
            ->get();
        return view('mentor.kuota',['admin'=>$admin]);
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
        $kuota = Kuota::findOrFail($id);
        return view('mentor.e_kuota',compact('kuota'));
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
        $kuota = Kuota::findOrFail($id);
        $this->validate(request(),[
            'jumlahkuota'=>'required',
            'statuskuota_id'=>'required',
        ]);
        $kuota->jumlahkuota = $request->jumlahkuota;
        $kuota->statuskuota_id = $request->statuskuota_id;
        $kuota->update();
        return redirect('m_kuota')->with('message', 'Kuota berhasil di update');
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
        return redirect('m_kuota')->with('message', 'Kuota berhasil dihapus');
    }
}
