<?php

namespace App\Services\File;

use App\Jobs\FileUploadJob;
use Illuminate\Support\Facades\Storage;

class FileService
{
    /**
     * Upload file to Local Storage Or Aws S3 Storage
     * @input: file
     * @input path abc/cdf
     */
    public static function upload($file, $path = "")
    {
        $destinationPath = storage_path("app/public/{$path}");
        $s3 = config("filesystems.disks.s3");
        if ($s3 && $s3["key"] && $s3["secret"] && $s3["region"] && $s3["bucket"]) {
            $path = Storage::disk('s3')->put("{$path}", $file, 'public');
            return ($s3["url"] ? $s3["url"] : "https://{$s3['bucket']}.s3.{$s3['region']}.amazonaws.com/") . $path;
        }
        $file->move($destinationPath, $file->getClientOriginalName());
        return asset('storage/' . $file->getClientOriginalName());
    }
}
