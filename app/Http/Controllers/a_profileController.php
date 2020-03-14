<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;

class a_profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = DB::table('users')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->join('divisi', 'users.divisi_id', '=', 'divisi.id')
            ->select('users.*', 'divisi.namadivisi', 'roles.status')
            ->where('users.id', '=', Auth::id())
            ->get();
        return view('admin.adminprofile', compact('admin'));
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
        $admin = User::findOrFail($id);
        return view('admin.e_adminprofile',compact('admin'));
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
        $admin = User::findOrFail($id);
        $this->validate(request(),[
            'name'=>'required',
            'nip'=>'required',
            'jabatan'=>'required',
            'email'=>'required',
            'divisi_id'=>'required',
        ]);
        $admin->name = $request->name;
        $admin->nip = $request->nip;
        $admin->jabatan = $request->jabatan;
        $admin->email = $request->email;
        $admin->divisi_id = $request->divisi_id;
        $admin->update();
        return redirect('a_profile')->with('message', 'Profile berhasil di update');
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
