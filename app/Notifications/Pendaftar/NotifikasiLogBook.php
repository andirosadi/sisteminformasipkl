<?php

namespace App\Notifications\Pendaftar;

use App\Logbook;
use App\Notifications\NotificationContract;
use App\Pendaftar;
use App\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class NotifikasiLogBook
 * @package App\Notifications\Pendaftar
 * @property Logbook $depencies
 * @property User $causer
 */
class NotifikasiLogBook extends NotificationContract
{
	public function __construct($causer, Logbook $depencies)
	{
		parent::__construct($causer, $depencies);
	}
	
	/**
	 * @return Collection
	 * @info mentor - logbook - pendaftar
	 * hubunganya 1 logbook 1 pendaftar kalo ya block return pertama di buka
	 * @info kalo 1 logbook untuk semua pendaftar 1 divisi
	 * biarin aja
	 */
	function getNotfieableUser(): Collection
	{
		return Pendaftar::where(['id'=>$this->depencies->pendaftar_id])->get();
//		return $this->wherePendaftarInDivisi($this->depencies->pendaftar->divisi_id)->get();
	}
	
	/**
	 * @return array
	 */
	function getmessage(): array
	{
		$logbook = $this->depencies;
		$mentor = $this->causer;
		return [
			'header'=>'Logbook ' . ( $logbook->status === 1 ? "diterima" : "ditolak" ),
			"message"=>$mentor->name . " me" . ($logbook->status === 1 ? "nerima":"nolak") . " logbook anda",
			"info"=>"-"
		];
	}
}
