<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Kuota
 *
 * @package App
 * @todo Kuota jangan extends Authenticatable
 * @property int $id
 * @property int $divisi_id
 * @property int $jumlahkuota
 * @property int $statuskuota_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kuota newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kuota newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kuota query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kuota whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kuota whereDivisiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kuota whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kuota whereJumlahkuota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kuota whereStatuskuotaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Kuota whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Divisi $divisi
 */
class Kuota extends Model
{
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'divisi_id', 'jumlahkuota', 'statuskuota_id'
	];
	public function divisi():BelongsTo{
		return $this->belongsTo(Divisi::class);
	}
}
