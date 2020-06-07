<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Laporanpkl
 *
 * @property int $id
 * @property int $pendaftar_id
 * @property string $judul
 * @property string $laporan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laporanpkl newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laporanpkl newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laporanpkl query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laporanpkl whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laporanpkl whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laporanpkl whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laporanpkl whereLaporan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laporanpkl wherePendaftarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laporanpkl whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Laporanpkl extends Model
{
    protected $table = 'laporanpkls';

    protected $fillable = [
        'judul', 'pendaftar_id', 'laporan'
    ];
}
