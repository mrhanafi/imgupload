<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CropImageController;
use App\Http\Controllers\ImagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('crop-image-upload', [CropImageController::class, 'index']);
// Route::post('crop-image-upload', [CropImageController::class, 'uploadCropImage']);

// Route::get('/upload', [ImagesController::class, 'index']);
Route::get('/hehe', function () {
    return view('upload');
});
Route::post('/uploadpic', [ImagesController::class, 'uploadImg'])->name('uploadimage');
