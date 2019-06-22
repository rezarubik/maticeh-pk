<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MaticehEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this->from('muhammad.reza.pahlevi.y@gmail.com')
            ->subject('Pembayaran Honor Tutor')
            ->view('adminPages/email')
            ->with(
                [
                    'nama' => "Muhammad Reza Pahlevi Y",
                    'content' => "Pembayaran Anda sudah kami transfer. Tetap semangat dalam mengajar! Terima kasih!",
                ]
            );
    }
}
