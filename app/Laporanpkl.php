<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporanpkl extends Model
{
    protected $table = 'laporanpkls';

    protected $fillable = [
        'judul', 'pendaftar_id', 'laporan'
    ];
}
