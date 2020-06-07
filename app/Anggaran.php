<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\Anggaran
 *
 * @property int $id
 * @property int $status_id
 * @property string $judul
 * @property string $laporananggaran
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anggaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anggaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anggaran query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anggaran whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anggaran whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anggaran whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anggaran whereLaporananggaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anggaran whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Anggaran whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Anggaran extends Model
{
    use Notifiable;
    protected $table = 'anggarans';
    protected $fillable =[
        'judul','laporananggaran','status_id'
    ];
}
