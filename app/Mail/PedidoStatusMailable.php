<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PedidoStatusMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject ="Estado del Pedido";
    public $param;
    public $productos;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($param,$productos)
    {
        $this->param = $param;
        $this->productos = $productos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.pedidoStatus');
    }
}
