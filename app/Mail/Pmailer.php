<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Pmailer extends Mailable
{
    use Queueable, SerializesModels;
    protected $inquiry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $inquiry )
    {
        $this->inquiry = $inquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->view('view.name');
        return $this->view('layouts.email')
            ->with([
                'iname'         => $this->inquiry['your-name'],
                'iemail'        => $this->inquiry['your-email'],
                'isubject'      => $this->inquiry['your-subject'],
                'imessage'      => $this->inquiry['your-message']
            ])
            ->from( $this->inquiry['your-email'], $this->inquiry['your-name'] )
            ->subject( $this->inquiry['your-subject'] );
    }
}
