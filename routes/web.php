<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PhotosController;
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

Route::get('/', [PhotosController::class, 'index'] );

Route::group(['middleware' => 'auth'], function (){
    Route::prefix('/user/')->group(function (){
        Route::get('profile',[GalleryController::class,'index']);
        Route::get('GalleryCreate',[GalleryController::class,'create']);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//User Gallery
//Route::get('/photos', [PhotosController::class, 'index'])->name('photos');

// photo Gallery
Route::get('/photos', [PhotosController::class, 'index'])->name('photos');
Route::get('/photo-detail', [PhotosController::class, 'photo_detail'])->name('photo-detail');


//Video Gallery
Route::get('/videos', [VideoController::class, 'index'])->name('videos');
Route::get('/video-detail', [VideoController::class, 'video_detail'])->name('video-detail');
