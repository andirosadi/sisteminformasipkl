<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    protected $table = 'logbooks';
    protected $fillable = [
        'lokasi', 'pendaftar_id', 'tanggal', 'uraian', 'status'
    ];
}
