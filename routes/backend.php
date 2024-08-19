<?php

use App\Http\Controllers\Backend\Profile\ProfileController as ProfileProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin/profile/')->name('profile.')->group(function () {
    Route::get('/index', [ProfileProfileController::class, 'profileIndex'])->name('index');
});

require __DIR__.'/auth.php';
