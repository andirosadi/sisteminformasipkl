<?php

namespace Tests\Unit;

use App\Kuota;
use App\Notifications\Admin\NotifikasiKouta;
use App\User;
use Faker\Factory;
use Illuminate\Notifications\DatabaseNotification;
use Tests\TestCase;
use function Psy\debug;

class test_NOTIFIKASI_KOUTA extends TestCase
{
	private function prep(){
		parent::setUp();
		DatabaseNotification::query()->delete();
//		define('ADMIN',1);
	}
	
	public function testExample()
	{
		$this->prep();
		
		$causer = User::whereRoleId(2)->get()->random();
		$notificationInstance = new NotifikasiKouta($causer);
		$faker  = Factory::create();
		$KoutaToEdit = Kuota::query()->first();
		$updatedata = [
			'jumlahkuota'=>$faker->randomNumber(),
			'statuskuota_id'=>$faker->boolean
		];
		$KoutaToEdit->update($updatedata);
		/**
		 * Kalo mau ngetes controller mending dari Feature
		 */
		NotifikasiKouta::dispatcher($causer, $notificationInstance,ADMIN,['kuota'=>$KoutaToEdit]);
		$user = User::whereRoleId(ADMIN)->first();
		$NOTIFIKASIKOUTA = $user->notifications()->whereType(NotifikasiKouta::class)->first()->toArray()['data'];
		$this->assertIsArray($NOTIFIKASIKOUTA);
		$this->assertArrayHasKey('message',$NOTIFIKASIKOUTA);
		$this->assertArrayHasKey('kuota',$NOTIFIKASIKOUTA);
		dump($updatedata ,$NOTIFIKASIKOUTA["message"], $NOTIFIKASIKOUTA["kuota"]);
	}
}