<?php

namespace App\Http\Services;

use App\Models\Upload;
use Illuminate\Support\Facades\Storage;

class UploadService
{

    public function uploadFile($model, $image) {
        $tempFile = Upload::where('folder', $image)->first();

        if ($model->getFirstMedia()) {
            $model->getFirstMedia()->delete();
        }

        if ($tempFile) {
            auth()->user()->addMedia(Storage::path('temp/' . $image . '/' . $tempFile->filename))->toMediaCollection();

            Storage::deleteDirectory('temp/' . $image);
            $tempFile->delete();
        }
    }
}
