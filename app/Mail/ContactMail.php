<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /** @var string */
    public $name;

    /** @var string */
    public $email;

    /** @var string */
    public $message;

    /** @var string */
    public $type;

    public function __construct(string $name, string $email, string $message, string $type = '')
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->type = $type;

        $this->subject = 'Kontakt od ' . $email;
        $this->setAddress($email, $name, 'replyTo');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact');
    }
}
