<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Statuskuota
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Kuota[] $user
 * @property-read int|null $user_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Statuskuota newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Statuskuota newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Statuskuota query()
 * @mixin \Eloquent
 */
class Statuskuota extends Model
{
    public function user()
    {
        return $this->belongsToMany('App\Kuota','statuskuota_id');
    }
}
