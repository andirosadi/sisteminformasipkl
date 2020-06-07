<?php

namespace App\Notifications\Admin;

use App\Anggaran;
use App\Notifications\NotificationContract;
use App\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class NotifikasiAnggaranPkl
 * @package App\Notifications\Admin
 * @property Anggaran $depencies
 * @property User $causer
 */
class NotifikasiAnggaranPkl extends NotificationContract
{
	protected $causer;
	protected $header = "Anggaran ";
	protected $info = "Status ";
	
	function getmessage(): array
	{
		$anggaran = $this->depencies;
		$causer = $this->causer;
		$anggaran->refresh();
		return [
			'header'=>$this->header,
			'message'=>"Anggaran PKL ". $anggaran->judul . ' ' .' telah '. ($anggaran->status_id === 1 ? "di terima " : "di tolak "),
			'info'=> 'Di' . ($anggaran->status_id === 1 ? " terima " : " di tolak ") . "oleh : " . $causer->name
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