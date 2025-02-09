<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Services\Mail\Mailler;
use App\Services\Mail\MailService;
use Illuminate\Support\Facades\Log;
class MailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Mailler $mail;
    /**
     * Create a new job instance.
     */
    public function __construct(Mailler $mail)
    {
        $this->mail = $mail;
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        MailService::send($this->mail);
        Log::info("SENT Mail: ".$this->mail);
    }
}
