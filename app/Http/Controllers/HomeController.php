<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Event;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        //Event Admin
        $event = DB::table('events')
            ->select('events.*')
            ->where('events.user_id', '=', Auth::user()->id)
            ->orderBY('events.tanggal','ASC')
            ->get();
         //Event Mentor
        $eventmentor = DB::table('events')
            ->select('events.*')
            ->where('events.divisi_id', '=', Auth::user()->divisi_id)
            ->where('events.role_id','=', Auth::user()->role_id)
            ->orderBY('events.tanggal','ASC')
            ->get();
        //Event Keuangan
        $eventkeuangan = DB::table('events')
            ->select('events.*')
            ->where('events.role_id','=', Auth::user()->role_id)
            ->orderBY('events.tanggal','ASC')
            ->get();
        //Anggaran
        $anggaran = DB::table('anggarans')
            ->join('statuskuota','anggarans.status_id','statuskuota.id')
            ->select('anggarans.*', 'statuskuota.status_kuota')
            ->where('anggarans.status_id', '=', 1)
            ->get();
        //Anggaran Keuangan
        $anggarankeuangan = DB::table('anggarans')
            ->join('statuskuota','anggarans.status_id','statuskuota.id')
            ->select('anggarans.*', 'statuskuota.status_kuota')
            ->where('anggarans.status_id', '=', 2)
            ->get();
        //Kuota
        $kuota = DB::table('kuotas')
            ->join('divisi', 'kuotas.divisi_id', '=', 'divisi.id')
            ->join('statuskuota', 'kuotas.statuskuota_id', '=', 'statuskuota.id')
            ->select('kuotas.*', 'statuskuota.status_kuota', 'divisi.namadivisi')
            ->where('kuotas.statuskuota_id', '=', 1)
            ->get();
        //Pendaftar
        $pendaftar = DB::table('pendaftars')
            ->join('status', 'pendaftars.status_id', '=', 'status.id')
            ->join('divisi', 'pendaftars.divisi_id', '=', 'divisi.id')
            ->select('pendaftars.*', 'status.aktivasi', 'divisi.namadivisi')
            ->where('status.id', '=', 2)
            ->get();
        //Logbook
        $logbook = DB::table('logbooks')
            ->join('pendaftars', 'logbooks.pendaftar_id', 'pendaftars.id')
            ->select('pendaftars.*', 'logbooks.*')
            ->where('pendaftars.divisi_id', '=', Auth::user()->divisi_id)
            ->where('logbooks.status', '=', 0)
            ->get();
        //Laporan
        $laporanpkl = DB::table('laporanpkls')
            ->join('pendaftars','laporanpkls.pendaftar_id','=','pendaftars.id')
            ->select('pendaftars.name', 'laporanpkls.*')
            ->where('pendaftars.divisi_id', '=', Auth::user()->divisi_id)
            ->get();
        //Kuota
        $kuotamentor = DB::table('kuotas')
            ->join('divisi', 'kuotas.divisi_id', '=', 'divisi.id')
            ->join('statuskuota', 'kuotas.statuskuota_id', '=', 'statuskuota.id')
            ->select('kuotas.*', 'statuskuota.status_kuota', 'divisi.namadivisi')
            ->where('divisi.id','=', Auth::user()->divisi_id)
            ->where('kuotas.statuskuota_id', '=', 2)
            ->get();
        //Kuota Count
        $kuotacount = DB::table('kuotas')
            ->select('kuotas.jumlahkuota')
            ->where('kuotas.statuskuota_id', '=', 1)
            ->sum('kuotas.jumlahkuota');
        //Kuota perdivisi
        $kuotadivisi = DB::table('kuotas')
            ->select('kuotas.*')
            ->where('kuotas.divisi_id', '=', Auth::user()->divisi_id)
            ->where('kuotas.statuskuota_id', '=', 1)
            ->sum('kuotas.jumlahkuota');
        //Total Peserta
        $totalpeserta = DB::table('pendaftars')
            ->select('pendaftars.status_id')
            ->where('pendaftars.status_id', '=', 1)
            ->count();
        //Total Peserta Divisi
        $totalpesertadivisi = DB::table('pendaftars')
            ->select('pendaftars.*')
            ->where('pendaftars.divisi_id', '=', Auth::user()->divisi_id)
            ->where('pendaftars.status_id', '=', 1)
            ->count();
        //Total Pendaftar
        $totalpendaftar = DB::table('pendaftars')
            ->select('pendaftars.status_id')
            ->where('pendaftars.status_id', '=', 2)
            ->count();

        $user =Auth::user();
        if($user->role_id == 1)
        {
            return view('admin.dashboard',compact('user', 'event', 'anggaran', 'kuota', 'pendaftar', 'kuotacount', 'totalpeserta', 'totalpendaftar'));
        }elseif ($user->role_id == 2)
        {
            return view('mentor.dashboard',compact('user', 'eventmentor', 'kuota', 'logbook', 'laporanpkl', 'kuotamentor', 'totalpesertadivisi', 'kuotadivisi'));
        }elseif ($user->role_id == 3)
        {
            return view('keuangan.dashboard',compact('user', 'eventkeuangan', 'anggarankeuangan'));
        }else
            {
                return back()->withErrors(['email' => 'Email atau password salah.']);
            }
    }
}
