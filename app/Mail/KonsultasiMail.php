<?php

namespace App\Mail;

use App\Models\Konsultasi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KonsultasiMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The konsultasi instance.
     *
     * @var \App\Models\Konsultasi
     */
    public $konsultasi;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Konsultasi $konsultasi)
    {
        $this->konsultasi = $konsultasi;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.konsultasi')
        ->from('baznas.pekanbaru@baznas.go.id', 'Baznas Kota Pekanbaru')
        ->subject('Konsultasi Zakat')
        ->replyTo('baznas.pekanbaru@baznas.go.id', 'Baznas Kota Pekanbaru');
    }
}
