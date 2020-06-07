<?php

namespace App\Notifications\Keuangan;

use App\Anggaran;
use App\Notifications\NotificationContract;
use App\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class NotifikasiAnggaranPKL
 * @package App\Notifications\Keuangan
 * @property Anggaran $depencies
 * @property User $causer
 */
class NotifikasiAnggaranPKL extends NotificationContract
{
	public function __construct($causer, Anggaran $depencies)
	{
		parent::__construct($causer, $depencies);
	}
	
	/**
	 * @return Collection
	 */
	function getNotfieableUser(): Collection
	{
		return $this->whereKeuangan()->get();
	}
	
	/**
	 * @return array
	 */
	function getmessage(): array
	{
		$admin = $this->causer;
		$anggaran = $this->depencies;
		return [
			'header'=>"Pengajuan anggaran PKL",
			'message'=>$admin->name . " mengajukan anggaran PKL",
			"info"=>'Dengan judul '. $anggaran->judul
		];
	}
}