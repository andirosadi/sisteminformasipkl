<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Event
 *
 * @property int $id
 * @property int $user_id
 * @property int $role_id
 * @property int $divisi_id
 * @property int $priority
 * @property string $tanggal
 * @property string $lokasi
 * @property string $agenda
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereAgenda($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereDivisiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereLokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereUserId($value)
 * @mixin \Eloquent
 */
class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'user_id', 'divisi_id', 'priority', 'tanggal', 'agenda', 'created_at', 'updated_at'
    ];
}
