<?php

namespace App\Http\Controllers\Auth;

use App\Mail\NotifPendaftaranPeserta;
use App\Mail\PenerimaanPesertaPkl;
use App\Notifications\Admin\NotifikasiPesertaBaru;
use App\Pendaftar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use DB;

class PesertaLoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/
	
	use AuthenticatesUsers;
	
	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $guard = 'pendaftar';
	protected $redirectTo = '/home';
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
//        $this->middleware('auth');
//        $this->user = \Auth::user();
	}
	
	public function showLoginForm()
	{
		return view('auth.pesertaLogin');
	}
	
	public function guard()
	{
//        return auth()->guard('pendaftars');
		return Auth::guard('pendaftars');
	}
	
	public function showRegisterPage()
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
			->get();
		
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
			->get();
		
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
			->get();
		
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
			->get();
		
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
			->get();
		
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
			->get();
		
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
			->get();
		return view('auth.pesertaRegister',
			compact('kuotasis', 'siscount', 'kuotahumas', 'humascount', 'kuotakeuangan', 'keuangancount', 'kuotamou1', 'mou1count', 'kuotamou5', 'mou5count', 'kuotampu1', 'mpu1count', 'kuotampu5', 'mpu5count'));
	}
	
	
	public function register(Request $request)
	{
		$request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|string|max:199|unique:pendaftars',
			'password' => 'required|string|min:6|confirmed',
			'suratpermohonan' => 'required|file|mimes:doc,docx,pdf|max:5000'
		]);
		$suratpermohonan = $request->file('suratpermohonan');
		$suratpermohonan->getClientOriginalName();
		$path = $suratpermohonan->store('public/surat_permohonan');
		$pendaftar = new Pendaftar;
		$pendaftar->name = $request->name;
		$pendaftar->email = $request->email;
		$pendaftar->password = bcrypt($request->password);
		$pendaftar->nim = $request->nim;
		$pendaftar->sekolah = $request->sekolah;
		$pendaftar->fakultas = $request->fakultas;
		$pendaftar->jurusan = $request->jurusan;
		$pendaftar->suratpermohonan = $path;
		$pendaftar->save();
		//Email
		/**
		 */
		\Mail::to($pendaftar->email)->send(new NotifPendaftaranPeserta($pendaftar));
		
		
		$notifikasi = new NotifikasiPesertaBaru($pendaftar, $pendaftar);
		$notifikasi->notify();
		
		return view('homeadmin')->with('message, Pendaftaran berhasil dilakukan');
	}
	
	public function login(Request $request)
	{
		if (Auth::guard('pendaftar')->attempt(['email' => $request->email, 'password' => $request->password, 'status_id'=>1])) {
			return redirect()->route('home.peserta');
		}
		return back()->withErrors(['email' => 'Email atau password salah.']);
	}
}
