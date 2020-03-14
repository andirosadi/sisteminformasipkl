<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PenerimaanPesertaPkl extends Mailable
{
    use Queueable, SerializesModels;
    public $pendaftar;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pendaftar)
    {
        $this->pendaftar = $pendaftar;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sites.penerimaan');
    }
}
