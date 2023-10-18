<?php

namespace App\Http\Services;

use App\Models\Upload;
use Illuminate\Support\Facades\Storage;

class UploadService
{

    public function uploadImage($model, $image, $collection_name = 'default') {
        $tempFile = Upload::where('folder', $image)->first();

        if ($model->getFirstMedia($collection_name)) {
            $model->getFirstMedia($collection_name)->delete();
        }

        if ($tempFile) {
            $model->addMedia(Storage::path('temp/' . $image . '/' . $tempFile->filename))
                ->toMediaCollection($collection_name);

            Storage::deleteDirectory('temp/' . $image);
            $tempFile->delete();
        }
    }

    public function livewireUploadImage($model, $image, $collection_name = 'default') {
        if ($model->getFirstMedia($collection_name)) {
            $model->getFirstMedia($collection_name)->delete();
        }

        $model->addMedia($image)->toMediaCollection($collection_name);
    }
}
