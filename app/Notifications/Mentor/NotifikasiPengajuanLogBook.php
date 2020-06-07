<?php

namespace App\Notifications\Mentor;

use App\Logbook;
use App\Notifications\NotificationContract;
use App\Pendaftar;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class NotifikasiPengajuanLogBook
 * @package App\Notifications\Mentor
 * @property Logbook $depencies
 * @property Pendaftar $causer
 */
class NotifikasiPengajuanLogBook extends NotificationContract
{
	protected $header = "Pengajuan logbook PKL";
	protected $messages = "Oleh ";
	protected $info = "Dengan uraian ";
	
	public function __construct($causer, Logbook $depencies)
	{
		parent::__construct($causer, $depencies);
	}
	
	function getmessage(): array
	{
		$pendaftar = $this->causer;
		$logbook =$this->depencies;
		return [
			'header'=>$this->header,
			'message'=>$this->messages . $pendaftar->name, " dengan lokasi "  .$logbook->lokasi,
			'info'=>$this->info . $logbook->uraian . " pada tanggal ". $logbook->created_at->locale('id')->isoFormat('dddd DD MMMM YYYY')
		];
	}
	
	/**
	 * @return Collection
	 */
	function getNotfieableUser(): Collection
	{
		return $this->whereMentorInDivisi($this->depencies->pendaftar->divisi_id)->get();
	}
}