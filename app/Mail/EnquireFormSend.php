<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquireFormSend extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * The name variable.
     *
     * @var name
     */
    public $name;
    public $email;
    public $message;
    public $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.enquireform')->with([
            'sender_name'       =>  $this->name,
            'sender_email'      =>  $this->email,
            'sender_message'    =>  $this->message,
            'sender_phone'    =>  $this->phone,
        ]);
    }
}
