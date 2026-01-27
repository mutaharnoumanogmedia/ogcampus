<?php

namespace App\Services;

class VideoUploadService
{
    public function upload($file)
    {
        // Placeholder logic for uploading file to storage/CDN
        return 'uploads/' . $file->getClientOriginalName();
    }
}
