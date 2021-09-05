<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    protected $username;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
   $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.order-shipped')
        ->with(['user' => $this->user])
        // ->attach('images/200092200427_457683.jpg',[
        //  'as' => 'fon rasmi.jpg',
        //  'mime' => 'image/jpeg',
        ->attachFromStorage(
            'images/200089500434_458587.jpg',
            'man.jpg',
            ['mime' => 'image/jpeg'],
        );   
    }
}
