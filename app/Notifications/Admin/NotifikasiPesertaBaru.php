<?php

namespace App\Notifications\Admin;

use App\Notifications\NotificationContract;
use App\Pendaftar;
use App\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class NotifikasiPesertaBaru
 * @package App\Notifications\Admin
 * @property Pendaftar $causer
 * @property Pendaftar $depencies
 */
class NotifikasiPesertaBaru extends NotificationContract
{
	protected $header = 'Peserta PKL';
	
	public function __construct($causer, Pendaftar $_)
	{
		parent::__construct($causer, $causer);
	}
	function getmessage(): array
	{
		return [
			'header'=>$this->header,
			'message'=>'Peserta PKL mendaftarkan diri atas nama '. $this->depencies->name,
			'info'=>'Mendaftar pada '. $this->depencies->created_at->isoFormat('dd mm yy')
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