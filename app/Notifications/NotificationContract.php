<?php


namespace App\Notifications;

use App\Anggaran;
use App\Kuota;
use App\Logbook;
use App\Pendaftar;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;

abstract class NotificationContract extends Notification
{
	use UserNotifyQuery;
	
	protected $data = [];
	
	protected $depencies = null;
	
	protected $causer = null;
	
	/**
	 * NotificationContract constructor.
	 * @param $causer User | Pendaftar
	 * @param Model | Pendaftar | Logbook | Anggaran | Kuota $depencies
	 */
	public function __construct( $causer, Model $depencies)
	{
		$this->causer = $causer;
		$this->depencies = $depencies;
	}
	
	/**
	 * Nyimpan data notifikasi ke dalam database
	 */
	public function notify(){
		$notifiableUsers = $this->getNotfieableUser();
		/**
		 * @param $user Pendaftar |User
		 */
		$notify = function ($user){
			$user->notify( $this );
		};
		$notifiableUsers->each($notify);
	}
	
	/**
	 * @desc mengambil user yang mau di notifikasikan
	 * @uses \App\Notifications\UserNotifyQuery
	 * @return Collection
	 */
	abstract function getNotfieableUser() : Collection;
	/**
	 * Data yang di tampilkan di view
	 * kalo mau edit-edit kata-kata buka notifikasi dengan nama yang method sama
	 * @return array
	 */
	abstract function getmessage() : array ;
	
	/**
	 * ----------------------------Bawaan laravel
	 */
	public function toDatabase($notifiable){
		return array_merge($this->data, ["message"=>$this->getmessage()]);
	}
	
	public function via($notifiable)
	{
		return ['database'];
	}
	
	public function toArray($notifiable)
	{
		return $this->toDatabase($notifiable);
	}
	
	/**
	 * ----------------------------Bawaan laravel
	 */

	/**
	 * @todo : tambahin action url biar di pas klik bisa langsung ke halaman yang bersangkutan
	 * @how : kelas ini kan punya depedesi model nah setiap model pasti punya route masing-masing
	 * tingga buat method di kelas ini ,di bikin abstract override kelas yang extends, atau buat mutator di model
	 */
}