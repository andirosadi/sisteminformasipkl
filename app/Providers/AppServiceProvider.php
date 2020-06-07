<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		define('PESERTA',0);
		define('ADMIN',1);
		define('MENTOR',2);
		define('KEUANGAN',3);
	}
	
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Builder::defaultStringLength(191);
		Blade::directive('notification', function () {
			return view('notifikasi');
		});
	}
}
