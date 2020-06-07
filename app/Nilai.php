<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\Nilai
 *
 * @property int $id
 * @property int $pendaftar_id
 * @property int|null $penulisanlaporan
 * @property int|null $penguasaanmateri
 * @property int|null $penyelesaianmakalah
 * @property int|null $kemampuananalisa
 * @property int|null $tanggungjawab
 * @property int|null $kehadiran
 * @property int|null $sikap
 * @property int|null $pengetahuan
 * @property int|null $inisiatif
 * @property int|null $kerjasama
 * @property int|null $kepemimpinan
 * @property int|null $potensi
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai whereInisiatif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai whereKehadiran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai whereKemampuananalisa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai whereKepemimpinan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai whereKerjasama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai wherePendaftarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai wherePengetahuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai wherePenguasaanmateri($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai wherePenulisanlaporan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai wherePenyelesaianmakalah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai wherePotensi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai whereSikap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai whereTanggungjawab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Nilai whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Nilai extends Model
{
    use Notifiable;
    protected $guard ='nilais';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pendaftar_id', 'penulisanlaporan', 'penguasaanmateri','penyelesaianmakalah','kemampuananalisa','tanggungjawab','kehadiran','sikap','pengetahuan','inisiatif','kerjasama','kepemimpinan','potensi'
    ];
}
