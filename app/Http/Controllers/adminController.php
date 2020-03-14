<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Divisi;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Validator;
use DB;

class adminController extends Controller
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
            ->select('users.*', 'roles.status', 'divisi.namadivisi')
            ->where('roles.id', '=', 1)
            ->get();
        return view('admin.adminlist',['admin'=>$admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.c_admin');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'email' => $request->email,
            'role_id' => 1,
            'divisi_id' => 1,
            'jabatan' => $request->jabatan,
            'password' => Hash::make($request->password),
        ]);
        return redirect('admin')->with('message', 'Admin berhasil ditambah');
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
        return view('admin.e_admin',compact('admin'));
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
        $user = User::findOrFail($id);
        $this->validate(request(),[
            'name'=>'required',
            'nip'=>'required',
            'jabatan'=>'required',
            'email'=>'required',
            'divisi_id'=>'required',
        ]);
        $user->name = $request->name;
        $user->nip = $request->nip;
        $user->jabatan = $request->jabatan;
        $user->email = $request->email;
        $user->divisi_id = $request->divisi_id;
        $user->update();
        return redirect('admin')->with('message', 'Admin berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin')->with('message','Admin berhasil di hapus');
    }
}
