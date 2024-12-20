<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('upload','upload')->name("image_upload_page");
Route::post('upload', [ImageController::class, 'upload'])->name("submit");
