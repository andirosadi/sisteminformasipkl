<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

/**
 * App\Pendaftar
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int|null $nim
 * @property string $sekolah
 * @property string $fakultas
 * @property string $jurusan
 * @property int $status_id
 * @property int|null $divisi_id
 * @property string|null $password
 * @property string|null $suratpermohonan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar whereDivisiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar whereFakultas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar whereJurusan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar whereNim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar whereSekolah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar whereSuratpermohonan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pendaftar whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Divisi|null $divisi
 */
class Pendaftar extends Authenticatable
{
    use Notifiable;
    protected $guard ='pendaftar';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','nim','sekolah','jurusan','fakultas', 'suratpermohonan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function divisi(){
    	return $this->belongsTo(Divisi::class);
    }
}
