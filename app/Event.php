<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'user_id', 'divisi_id', 'priority', 'tanggal', 'agenda', 'created_at', 'updated_at'
    ];
}
