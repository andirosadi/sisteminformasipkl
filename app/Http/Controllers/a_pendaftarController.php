<?php

namespace App\Http\Controllers;

use App\Mail\PenerimaanPesertaKerjaPraktik;
use App\Mail\PenerimaanPesertaPkl;
use App\Pendaftar;
use Illuminate\Http\Request;
use App\User;
use App\Divisi;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class a_pendaftarController extends Controller
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
            ->where('status.id', '=', 2)
            ->get();
        return view('admin.pendaftarlist',['admin'=>$admin]);
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
        //Kuota Humas
        $kuotahumas = DB::table('kuotas')
            ->join('divisi', 'kuotas.divisi_id', '=', 'divisi.id')
            ->join('statuskuota', 'kuotas.statuskuota_id', '=', 'statuskuota.id')
            ->select('kuotas.*', 'statuskuota.status_kuota', 'divisi.namadivisi')
            ->where('divisi.id', '=', 1)
            ->get();
        $humascount = DB::table('pendaftars')
            ->join('status', 'pendaftars.status_id', '=', 'status.id')
            ->select('pendaftars.*', 'status.aktivasi')
            ->where(['pendaftars.divisi_id' => 1,
                'status.id' => 1])
            ->count();

        //Kuota SIS
        $kuotasis = DB::table('kuotas')
            ->join('divisi', 'kuotas.divisi_id', '=', 'divisi.id')
            ->join('statuskuota', 'kuotas.statuskuota_id', '=', 'statuskuota.id')
            ->select('kuotas.*', 'statuskuota.status_kuota', 'divisi.namadivisi')
            ->where('divisi.id', '=', 2)
            ->get();
        $siscount = DB::table('pendaftars')
            ->join('status', 'pendaftars.status_id', '=', 'status.id')
            ->select('pendaftars.*', 'status.aktivasi')
            ->where(['pendaftars.divisi_id' => 2,
                'status.id' => 1])
            ->count();

        //Kuota keuangan
        $kuotakeuangan = DB::table('kuotas')
            ->join('divisi', 'kuotas.divisi_id', '=', 'divisi.id')
            ->join('statuskuota', 'kuotas.statuskuota_id', '=', 'statuskuota.id')
            ->select('kuotas.*', 'statuskuota.status_kuota', 'divisi.namadivisi')
            ->where('divisi.id', '=', 3)
            ->get();
        $keuangancount = DB::table('pendaftars')
            ->join('status', 'pendaftars.status_id', '=', 'status.id')
            ->select('pendaftars.*', 'status.aktivasi')
            ->where(['pendaftars.divisi_id' => 3,
                'status.id' => 1])
            ->count();

        //Kuota Managerial Operasi Unit 1 - 4
        $kuotamou1 = DB::table('kuotas')
            ->join('divisi', 'kuotas.divisi_id', '=', 'divisi.id')
            ->join('statuskuota', 'kuotas.statuskuota_id', '=', 'statuskuota.id')
            ->select('kuotas.*', 'statuskuota.status_kuota', 'divisi.namadivisi')
            ->where('divisi.id', '=', 4)
            ->get();
        $mou1count = DB::table('pendaftars')
            ->join('status', 'pendaftars.status_id', '=', 'status.id')
            ->select('pendaftars.*', 'status.aktivasi')
            ->where(['pendaftars.divisi_id' => 4,
                'status.id' => 1])
            ->count();

        //Kuota Managerial Operasi Unit 5 - 7
        $kuotamou5 = DB::table('kuotas')
            ->join('divisi', 'kuotas.divisi_id', '=', 'divisi.id')
            ->join('statuskuota', 'kuotas.statuskuota_id', '=', 'statuskuota.id')
            ->select('kuotas.*', 'statuskuota.status_kuota', 'divisi.namadivisi')
            ->where('divisi.id', '=', 5)
            ->get();
        $mou5count = DB::table('pendaftars')
            ->join('status', 'pendaftars.status_id', '=', 'status.id')
            ->select('pendaftars.*', 'status.aktivasi')
            ->where(['pendaftars.divisi_id' => 5,
                'status.id' => 1])
            ->count();

        //Kuota Managerial Pemeliharaan Unit 1 - 4
        $kuotampu1 = DB::table('kuotas')
            ->join('divisi', 'kuotas.divisi_id', '=', 'divisi.id')
            ->join('statuskuota', 'kuotas.statuskuota_id', '=', 'statuskuota.id')
            ->select('kuotas.*', 'statuskuota.status_kuota', 'divisi.namadivisi')
            ->where('divisi.id', '=', 6)
            ->get();
        $mpu1count = DB::table('pendaftars')
            ->join('status', 'pendaftars.status_id', '=', 'status.id')
            ->select('pendaftars.*', 'status.aktivasi')
            ->where(['pendaftars.divisi_id' => 6,
                'status.id' => 1])
            ->count();

        //Kuota Managerial Pemeliharaan Unit 5 - 7
        $kuotampu5 = DB::table('kuotas')
            ->join('divisi', 'kuotas.divisi_id', '=', 'divisi.id')
            ->join('statuskuota', 'kuotas.statuskuota_id', '=', 'statuskuota.id')
            ->select('kuotas.*', 'statuskuota.status_kuota', 'divisi.namadivisi')
            ->where('divisi.id', '=', 7)
            ->get();
        $mpu5count = DB::table('pendaftars')
            ->join('status', 'pendaftars.status_id', '=', 'status.id')
            ->select('pendaftars.*', 'status.aktivasi')
            ->where(['pendaftars.divisi_id' => 7,
                'status.id' => 1])
            ->count();
        $coba = DB::table('kuotas')
          ->join('divisi', 'kuotas.divisi_id', '=', 'divisi.id')
          ->select('kuotas.*', 'divisi.namadivisi')
          ->get();
        $divisi = DB::table('divisi')
            ->select('divisi.*')
            ->get();
        $pendaftar = Pendaftar::findOrFail($id);
        return view('admin.aktivasipendaftar',
            compact('coba', 'pendaftar', 'divisi', 'kuotahumas', 'humascount','kuotasis','siscount','kuotakeuangan','keuangancount','kuotamou1','mou1count','kuotamou5','mou5count','kuotampu1','mpu1count','kuotampu5','mpu5count'));
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
        $pendaftar = Pendaftar::findOrFail($id);
        $this->validate(request(),[
            'status_id'=>'required',
            'divisi_id'=>'required',
        ]);
        $pendaftar->status_id = $request->status_id;
        $pendaftar->divisi_id = $request->divisi_id;
        $pendaftar->update();
        if ($pendaftar->divisi_id != 8 && $pendaftar->status_id != 2)
        {
            \Mail::to($pendaftar->email)->send(new PenerimaanPesertaKerjaPraktik($pendaftar));
            return redirect('a_pendaftar')->with('message', 'Pendaftar berhasil di update');
        }
        else
        {
            return redirect('a_pendaftar')->with('message', 'Pendaftar berhasil di update');
        }
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
        return redirect('a_pendaftar')->with('message','Pendaftar berhasil di hapus');
    }
}
