<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('auth.login');
});

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    /**
        Dashboard
     **/
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    /**
        Admin Profile
     **/
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /**
        Uploads
     **/
    // Filepond
    Route::post('/filepond/upload', [UploadsController::class, 'filepondUpload'])
        ->name('filepond.upload');
    Route::delete('/filepond/delete', [UploadsController::class, 'filepondDelete'])
        ->name('filepond.delete');
});


