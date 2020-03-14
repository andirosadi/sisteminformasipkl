<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use App\User;
use DB;
use PDF;
use Illuminate\Http\Request;

class penerimaanPesertaController extends Controller
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
        $suratpernyataan = Pendaftar::findOrFail($id)
            ->join('divisi', 'pendaftars.divisi_id', '=', 'divisi.id')
            ->select('pendaftars.*', 'divisi.namadivisi')
            ->where(['pendaftars.id' => $id])
            ->get();
        $humas = DB::table('users')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->join('divisi', 'users.divisi_id', '=', 'divisi.id')
            ->select('users.*', 'roles.status', 'divisi.namadivisi')
            ->where(['roles.id' => 1, 'divisi.id'=>1])
            ->get();
//        $pdf = PDF::loadview('emails.sites.penerimaanpesertapkl', compact('suratpernyataan'));
//        return $pdf->stream();
        return view('emails.sites.suratbalasan', compact('suratpernyataan', 'humas'));
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
        //
    }
}
