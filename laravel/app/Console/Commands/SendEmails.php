<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Mail\Mailler;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $params = [
            'body' => 'This is the body of test email.'
        ];

        $mail = new Mailler();
        $mail->to = ["nguyendung1712@gmail.com", "dungnv@dipro.vn"];
        $mail->bcc = ["nguyendung1719@gmail.com"];
        $mail->subject = "Title";
        $mail->template =  "templates.mail";
        $mail->params =  $params;
        $mail->sendJob();
        
       
    }
}
