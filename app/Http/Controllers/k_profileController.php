<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;

class k_profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keuangan = DB::table('users')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->join('divisi', 'users.divisi_id', '=', 'divisi.id')
            ->select('users.*', 'divisi.namadivisi', 'roles.status')
            ->where('users.id', '=', Auth::id())
            ->get();
        return view('keuangan.keuanganprofile', compact('keuangan'));
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
        $keuangan = User::findOrFail($id);
        return view('keuangan.e_keuanganprofile',compact('keuangan'));
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
        $keuangan = User::findOrFail($id);
        $this->validate(request(),[
            'name'=>'required',
            'nip'=>'required',
            'jabatan'=>'required',
            'email'=>'required',
            'divisi_id'=>'required',
        ]);
        $keuangan->name = $request->name;
        $keuangan->nip = $request->nip;
        $keuangan->jabatan = $request->jabatan;
        $keuangan->email = $request->email;
        $keuangan->divisi_id = $request->divisi_id;
        $keuangan->update();
        return redirect('k_profile')->with('message', 'Profile berhasil di update');
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
