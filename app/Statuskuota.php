<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statuskuota extends Model
{
    public function user()
    {
        return $this->belongsToMany('App\Kuota','statuskuota_id');
    }
}
