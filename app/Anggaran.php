<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Anggaran extends Model
{
    use Notifiable;
    protected $table = 'anggarans';
    protected $fillable =[
        'judul','laporananggaran','status_id'
    ];
}
