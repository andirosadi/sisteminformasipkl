<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('selamatdatang');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource('admin', 'adminController');
Route::resource('mentor', 'mentorController');
Route::resource('keuangan', 'keuanganController');
Route::resource('a_kuota', 'a_kuotaController');
Route::resource('m_kuota', 'm_kuotaController');
Route::resource('a_pendaftar', 'a_pendaftarController');
Route::resource('a_peserta', 'a_pesertaController');
Route::resource('m_peserta', 'm_pesertaController');
Route::resource('k_anggaran', 'k_anggaranController');
Route::resource('idcard', 'idcardController');
Route::resource('sertifikat', 'sertifikatController');
Route::resource('a_profile', 'a_profileController');
Route::resource('k_profile', 'k_profileController');
Route::resource('m_profile', 'm_profileController');
Route::resource('p_profile', 'p_profileController');
Route::resource('event', 'eventController');
Route::resource('penerimaanPeserta', 'penerimaanPesertaController');
Route::resource('a_laporananggaran', 'a_laporananggaranController');

//Route::resource('nilai', 'nilaiController');
Route::post('m_nilai/{id}/addnilai', 'm_nilaiController@nilai');
Route::resource('m_nilai', 'm_nilaiController');
Route::resource('lihatlaporan', 'lihatlaporanController');
Route::resource('m_laporan', 'm_laporanController');
Route::resource('logbook', 'logbookController');
Route::resource('m_logbook', 'm_logbookController');


//buat laporan
Route::get('laporanpkl/index','laporanController@index')->name('laporanpkl.index');
Route::post('laporanpkl/upload','laporanController@upload')->name('laporanpkl.upload');
Route::get('laporanpkl/form','laporanController@buatlaporan')->name('laporanpkl.form');
Route::get('laporanpkl/{$id}/edit','laporanController@edit')->name('laporanpkl.edit');
Route::post('laporanpkl/{$id}','laporanController@update')->name('laporanpkl.update');
Route::delete('laporanpkl', 'laporanController@destroy')->name('laporanpkl.delete');

//nilai peserta
Route::get('nilai/index', 'nilaiPesertaController@index')->name('nilai.index');
Route::get('nilai/cetak', 'nilaiPesertaController@cetaknilaipeserta_pdf');
Route::get('nilai/{$id}', 'nilaiPesertaController@formtambahnilai')->name('nilai.buat');
Route::post('nilai/{$id}/tambah', 'nilaiPesertaController@tambahnilai')->name('nilai.tambah');



//buat anggaran
Route::get('laporananggaran/upload', 'uploadAnggaranController@form')->name('laporananggaran.form');
Route::get('laporananggaran/index', 'uploadAnggaranController@index')->name('laporananggaran.index');
Route::post('laporananggaran/upload', 'uploadAnggaranController@upload')->name('laporananggaran.upload');


//login dan register peserta
Route::get('/peserta', function (){
    return redirect('peserta.dashboard');
})->name('peserta.dashboard');
Route::get('peserta-login','Auth\PesertaLoginController@showLoginForm');
Route::post('peserta-login', ['as' => 'peserta-login', 'uses' => 'Auth\PesertaLoginController@login']);
Route::get('peserta-register','Auth\PesertaLoginController@showRegisterPage');
Route::post('peserta-register', 'Auth\PesertaLoginController@register')->name('peserta.register');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home-peserta', 'pesertaHomeController@index')->name('home.peserta');
