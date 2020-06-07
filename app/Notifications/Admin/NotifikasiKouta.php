<?php

namespace App\Notifications\Admin;

use App\Divisi;
use App\Kuota;
use App\Notifications\NotificationContract;
use App\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class NotifikasiKouta
 * @package App\Notifications\Admin
 * @property Kuota $depencies
 * @property User $causer
 */
class NotifikasiKouta extends NotificationContract
{
	protected $causer;
	protected $header = "Kouta magang ";
	protected $info = "Jumlah kuota ";
	
	public function __construct($causer, Kuota $depencies)
	{
		parent::__construct($causer, $depencies);
	}
	
	public function getmessage() : array {
		$kuota = $this->depencies;
		$causer = $this->causer;
		$divisi = $kuota->divisi;
		/*
		 * Kalo divisi tidak di temukan tolong cari problemnya...
		 * default kalo tidak di temukan pake text "-"
		 */
		$message = $causer->name. ' ' . ($kuota->statuskuota_id ? "menyetujui " : "tidak menyetujui") . ' kuota pada divisi : '. ($divisi ? $divisi->namadivisi : "-");
		return [
			'header'=>$this->header . ($divisi ? $divisi->namadivisi : '-'),
			'message'=>$message,
			'info'=>$this->info . $kuota->jumlahkuota
		];
	}
	/**
	 * @return Collection
	 */
	function getNotfieableUser(): Collection
	{
		return $this->whereRoleAdmin()->get();
	}
}