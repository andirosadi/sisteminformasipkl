<?php

namespace App\Http\Controllers;

use App\Logbook;
use App\Notifications\Pendaftar\NotifikasiLogBook;
use App\User;
use Illuminate\Http\Request;
use DB;

class m_logbookController extends Controller
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
        $logbook = DB::table('logbooks')
            ->join('pendaftars', 'logbooks.pendaftar_id', 'pendaftars.id')
            ->select('pendaftars.*', 'logbooks.*')
            ->where(['pendaftars.id' => $id])
            ->get();
            return view('mentor.logbook', compact('logbook'));
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
        return view('mentor.e_logbook', compact('logbook'));
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
        $peserta = $logbook->pendaftar_id;
        $this->validate(request(),[
            'status'=>'required',
        ]);
        $logbook->status = $request->status;
        $logbook->update();
	
	    /**
	     * @var User $mentor
	     */
        $mentor = auth()->user();
        $logbook->refresh();
        $notifikasi = new NotifikasiLogBook($mentor, $logbook);
        $notifikasi->notify();
        
        return redirect('m_logbook/'.$peserta)->with('message','Logbook berhasil di update');
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
