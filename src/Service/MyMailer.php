<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MyMailer
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail($email,$objet, $message,$files)
    {
        $email = (new Email())
            ->from($email)
            ->to('alan.jordy1999@gmail.com')
            ->subject($objet)
            ->text($message);
        if($files.length > 0){
            for($i=0;$i<$files.length;$i++){
                $email->attachFromPath($files[$i]);
            }
        }

        $this->mailer->send($email);
    }
}