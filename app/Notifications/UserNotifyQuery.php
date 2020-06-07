<?php


namespace App\Notifications;


use App\Pendaftar;
use App\User;

trait UserNotifyQuery
{
	protected function whereRoleAdmin(){
		return User::whereRoleId(1);
	}
	protected function whereDivisi(int $divisi){
		return User::whereDivisiId($divisi);
	}
	protected function whereKeuangan(){
		return User::where('role_id','=', 3);
	}
	protected function whereMentorInDivisi(int $divisi){
		return $this->whereDivisi($divisi)->where('role_id','=', 2);
	}
	protected function whereKeuanganInDivisi(int $divisi){
		return $this->whereDivisi($divisi)->where('role_id','=', 3);
	}
	protected function wherePendaftarInDivisi(int $divisi){
		return Pendaftar::whereDivisiId($divisi);
	}
}