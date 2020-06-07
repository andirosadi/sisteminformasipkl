<?php

namespace App\Notifications\Mentor;

use App\Divisi;
use App\Kuota;
use App\Notifications\NotificationContract;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class NotifikasiPengajuanKuota
 * @package App\Notifications\Mentor
 * @property Kuota $depencies
 */
class NotifikasiPengajuanKuota extends NotificationContract
{
	
	protected $header = "Pengajuan mentor & kouta PKL";
	protected $messages = "Jumlah kouta yang diajukan ";
	
	public function __construct($causer, Kuota $depencies)
	{
		parent::__construct($causer, $depencies);
	}
	
	function getmessage(): array
	{
		$kuota = $this->depencies;
		$causer = $this->causer;
		$divisi = Divisi::find($kuota->divisi_id);
		/*
		 * Kalo divisi tidak di temukan tolong cari problemnya...
		 * default kalo tidak di temukan pake text "-"
		 */
		$message = $causer->name. ' mengajukan anda sebagai mentor PKL pada divisi ' . $divisi->namadivisi ;
		return [
			'header'=>$this->header,
			'message'=>$message,
			'info'=>"jumlah kuota : " . $kuota->jumlahkuota
		];
	}
	
	/**
	 * @return Collection
	 */
	function getNotfieableUser(): Collection
	{
		return $this->whereMentorInDivisi($this->depencies->divisi->id)->get();
	}
}
