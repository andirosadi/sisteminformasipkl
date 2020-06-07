<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Logbook
 *
 * @property int $id
 * @property int $pendaftar_id
 * @property int $status
 * @property string $tanggal
 * @property string $lokasi
 * @property string $uraian
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Logbook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Logbook newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Logbook query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Logbook whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Logbook whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Logbook whereLokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Logbook wherePendaftarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Logbook whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Logbook whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Logbook whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Logbook whereUraian($value)
 * @mixin \Eloquent
 * @property-read \App\Pendaftar $pendaftar
 */
class Logbook extends Model
{
    protected $table = 'logbooks';
    protected $fillable = [
        'lokasi', 'pendaftar_id', 'tanggal', 'uraian', 'status'
    ];
    public function pendaftar() : BelongsTo{
    	return $this->belongsTo(Pendaftar::class);
    }
}
