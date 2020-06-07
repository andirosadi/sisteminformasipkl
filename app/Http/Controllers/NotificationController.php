<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class NotificationController extends Controller
{
	
	public function getbypendaftar(){
		/**
		 * @var $user  Pendaftar
		 */
		$user = auth('pendaftar')->user();
		return $user->notifications()->paginate();
		
	}
	
	public function index()
	{
		if (! auth()->check()){
			if (auth('pendaftar')->check()){
				return $this->getbypendaftar();
			}
			abort(400);
		}
		/**
		 * @var $user User
		 */
		$user = auth()->user();
		return $user->notifications()->paginate();
	}
	public function update(Request $request,  DatabaseNotification $notification)
	{
		if (! $request->user()){
			abort(400);
		}
		$user = auth()->user();
		assert($user instanceof User);
		if ($notification->notifiable_id !== $user->id){
			abort(401);
		}
		$notification->markAsRead();
		return response()->json(['status'=>'updated']);
	}
}
