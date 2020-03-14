<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LaporanAnggaran extends Notification
{
    use Queueable;
    public $anggarans;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($anggarans)
    {
        $this->anggarans = $anggarans;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'judul' => $this->anggarans->judul,
            'laporananggaran' => $this->anggarans->laporananggaran,
            'status_id' => $this->anggarans->status_id
        ];
    }
}
