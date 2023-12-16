<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YHAController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ProjectController; 
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PhotoGalleryController;

// Home Controllers
Route::get('/', [YHAController::class, 'home'])->name('YhaHome');
Route::get('/home', [YHAController::class, 'home'])->name('YhaHome');

// cousre
Route::get('/course', [CourseController::class, 'course'])->name('YhaCourse');

// project
Route::get('/project', [ProjectController::class, 'project'])->name('YhaProject');

// photo-gallery
Route::get('/photogallery', [PhotoGalleryController::class, 'photoGallery'])->name('YhaPhotoGallery');

// event
Route::get('/event', [EventController::class, 'event'])->name('YhaEvent');

// timetable


// admin controller


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.pages.index');
    })->name('dashboard');


    Route::group(['prefix' => 'home'], function() {
        Route::get('/updateSlider', function(){

        });
    });

});


