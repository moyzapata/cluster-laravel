<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\Solicitudes;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class solicitudMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $solicitudes;

    public function __construct(Solicitudes $solicitudes)
    {
        $this->solicitudes = $solicitudes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.solicitud')->attach(Storage::path($this->solicitudes['cv']), [ 'as' => 'cv.pdf', 'mime' => 'application/pdf',])->subject('Nueva solicitud');
    }
}
