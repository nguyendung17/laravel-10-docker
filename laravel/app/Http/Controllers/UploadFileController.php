<?php

namespace App\Http\Controllers;

use App\Services\File\FileService;
use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function uploadFile(Request $request) {
        return FileService::upload(($request->file('file')));
    }
}
