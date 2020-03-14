<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Event;
use DB;

class pesertaHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Event
        $event = DB::table('events')
            ->select('events.*')
            ->where('events.role_id','=', 1)
            ->orWhere('events.divisi_id', '=', \Illuminate\Support\Facades\Auth::guard('pendaftar')->user()->divisi_id)
            ->orderBY('events.tanggal','ASC')
            ->get();
        //Nilai Updates
        $nilai = DB::table('nilais')
            ->join('pendaftars', 'nilais.pendaftar_id', '=', 'pendaftars.id')
            ->select('nilais.*', 'pendaftars.name', 'pendaftars.nim', 'pendaftars.jurusan', 'pendaftars.sekolah')
            ->where('pendaftars.id', '=', Auth::guard('pendaftar')->user()->id)
            ->get();
        //Logbook Updates
        $logbookpeserta = DB::table('logbooks')
            ->select('logbooks.*')
            ->where('logbooks.pendaftar_id', '=', Auth::guard('pendaftar')->user()->id)
            ->where('logbooks.status', '=', 0)
            ->orWhere('logbooks.status', '=', 2)
            ->orderBY('logbooks.tanggal','ASC')
            ->get();
        //Nilai Updates

        return view('peserta.dashboard', compact('event', 'nilai', 'logbookpeserta'));
    }
}
