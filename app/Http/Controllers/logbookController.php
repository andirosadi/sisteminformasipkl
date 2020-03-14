<?php

namespace App\Http\Controllers;

use App\Logbook;
use Illuminate\Http\Request;
use DB;
use Auth;

class logbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logbookpeserta = DB::table('logbooks')
            ->select('logbooks.*')
            ->where('logbooks.pendaftar_id', '=', Auth::guard('pendaftar')->user()->id)
            ->orderBY('logbooks.tanggal','ASC')
            ->get();
        return view('peserta.logbook', compact('logbookpeserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.c_logbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userID = auth('pendaftar')->user()->getAuthIdentifier();
        $logbook = new Logbook();
        $logbook->pendaftar_id = $userID;
        $logbook->lokasi = $request->lokasi;
        $logbook->tanggal = $request->tanggal;
        $logbook->uraian = $request->uraian;
        $logbook->save();
        return redirect()->route('logbook.index')->with('message', 'Logbook berhasil ditambah');
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
        $logbook = Logbook::findOrFail($id);
        return view('peserta.e_logbook', compact('logbook'));
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
        $logbook = Logbook::findOrFail($id);
        $this->validate(request(),[
            'lokasi'=>'required',
            'tanggal'=>'required',
            'uraian'=>'required',
        ]);
        $logbook->lokasi = $request->lokasi;
        $logbook->tanggal = $request->tanggal;
        $logbook->uraian = $request->uraian;
        $logbook->update();
        return redirect('logbook')->with('message', 'Logbook berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logbook = Logbook::find($id);
        $logbook->delete();
        return redirect('logbook')->with('message', 'Logbook berhasil dihapus');
    }
}
