<?php

namespace App\Jobs;

use App\Services\File\FileService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class FileUploadJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $file;
    public $path;
    /**
     * Create a new job instance.
     */
    public function __construct($file,$path = "")
    {
        $this->file = $file;
        $this->file = $path;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        FileService::upload($this->file,$this->path);
    }
}
