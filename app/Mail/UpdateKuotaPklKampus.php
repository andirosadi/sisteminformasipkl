<?php

namespace App\Mail;

use App\Pendaftar;
use App\Kuota;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UpdateKuotaPklKampus extends Mailable
{
    use Queueable, SerializesModels;
    public $pendaftar, $kuota;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($kuota)
    {
        $this->kuota = $kuota;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('emails.sites.updatekuotapklkampus');
    }
}
