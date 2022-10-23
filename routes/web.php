<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\TagController;
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
        Route::get('/',[GalleryController::class,'index']);
        Route::get('profile',[GalleryController::class,'index']);
        Route::post('store_gallery',[GalleryController::class,'store'])->name('store_gallery');
        Route::post('update_gallery',[GalleryController::class,'update']);

        Route::post('storePhotos',[PhotosController::class,'store']);

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//User Gallery
//Route::get('/photos', [PhotosController::class, 'index'])->name('photos');
Route::get('/tags', [TagController::class, 'index'])->name('tags');


// photo Gallery
Route::get('/photos', [PhotosController::class, 'index'])->name('photos');
Route::get('/photo-detail/{id}', [PhotosController::class, 'photo_detail'])->name('photo-detail');


//Video Gallery
Route::get('/videos', [VideoController::class, 'index'])->name('videos');
Route::get('/video-detail', [VideoController::class, 'video_detail'])->name('video-detail');
