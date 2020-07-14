<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Divisi
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 * @property-read int|null $user_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Divisi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Divisi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Divisi query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $namadivisi
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Divisi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Divisi whereNamadivisi($value)
 */
class Divisi extends Model
{
	protected $table = "divisi";
    public function user()
    {
        return $this->belongsToMany('App\User','divisi_id');
    }
    public function kouta():HasOne{
    	return $this->hasOne(Kuota::class);
    }
}
