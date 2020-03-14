<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

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
