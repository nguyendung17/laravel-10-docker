<?php

namespace App\Services\Mail;

use App\Services\Mail\SendMail;
use Mail;

class MailService
{
    public static function send($mail)
    {
        $email = Mail::to($mail->to);
        if (isset($mail->bcc)) {
            $email->bcc($mail->bcc);
        }
        if (isset($mail->cc)) {
            $email->cc($mail->cc);
        }
        $email->send(new SendMail($mail));
    }
}
