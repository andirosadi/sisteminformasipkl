<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    public function user()
    {
        return $this->belongsToMany('App\User','divisi_id');
    }
}
