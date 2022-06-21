<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MayoristaMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject ="Formulario de Contacto";
    public $param;
    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($param)
     {
         $this->param = $param;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mayorista');
    }
}
