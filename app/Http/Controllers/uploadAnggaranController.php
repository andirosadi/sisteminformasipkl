<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Notifications\Keuangan\NotifikasiAnggaranPKL;
use App\User;
use Illuminate\Http\Request;
use App\Anggaran;
use Illuminate\Notifications\Notification;
use Validator;
use Illuminate\View\View;
use DB;
use Illuminate\Support\Facades\Storage;

// impor model file
use App\File;
use Illuminate\Http\RedirectResponse;
use phpDocumentor\Reflection\Types\Nullable;


class   uploadAnggaranController extends Controller
{
    public function index():View //Menampilkan data laporan anggaran
    {
//        $files = Anggaran::orderBY('created_at', 'DESC')
//            ->paginate(30);
        $files = DB::table('anggarans')
            ->join('statuskuota','anggarans.status_id','statuskuota.id')
            ->select('anggarans.*', 'statuskuota.status_kuota')
            ->get();
        return view('admin.laporananggaran',compact('files'));
    }


    public function form() //Mengarahkan pada halaman buat anggaran pkl
    {
        return view('admin.c_anggaranpkl');
    }



    public function upload(Request $request) //method untuk upload anggaran pkl
    {
        $this -> validate($request,[
            'judul' =>'required|max:100',
            'laporananggaran' =>'required|file|max:5000'
        ]);
        $uploadedFile =$request->file('laporananggaran');
        $uploadedFile->getClientOriginalName();
        $path = $uploadedFile->store('public/laporan_anggaran');
        $anggaran = Anggaran::create([
            'judul'=>$request->judul ?? $uploadedFile->getClientOriginalName(),
            'laporananggaran'=> $path
        ]);
	    /**
	     * @var $user User
	     */
        $user = auth()->user();
        
        $notifikasi = new NotifikasiAnggaranPKL($user, $anggaran);
        $notifikasi->notify();
        
        return redirect('laporananggaran/index')->with('message','Anggaran berhasil ditambah.');
//            ->back()
//            ->withSuccess();
//        return view('admin.laporananggaran');
    }
}
