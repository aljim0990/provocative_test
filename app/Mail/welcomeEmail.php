<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class welcomeEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
     

        // return $this->view('view.name');
        return $this
        //->to(config('app.mail_username'))
        ->to($this->details['email'])
        ->from('mdm@gmail.com','MDM')
        ->subject('MDM WELCOME')
        ->markdown('emails.welcome');
    }
}
