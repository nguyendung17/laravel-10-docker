<?php

namespace App\Services\Mail;

use App\Services\Mail\SendMail;
use Mail;

interface MailServiceInterface
{
    public  function send(Mailler $mail);
}
