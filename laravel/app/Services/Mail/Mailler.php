<?php

namespace App\Services\Mail;

use App\Jobs\MailJob;
use App\Services\Mail\MailService;

class Mailler
{
    public $to;
    public $bcc;
    public $subject;
    public $params;
    public $template;
    public $attachments = [];
   
    public function send()
    {
        MailService::send($this);
    }
    public function sendJob()
    {
        MailJob::dispatch($this);
    }
}
