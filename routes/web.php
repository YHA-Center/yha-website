<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Home Controllers
Route::get('/', [HomeController::class, 'home'])->name('YhaHome');
Route::get('/home', [HomeController::class, 'home'])->name('YhaHome');
Route::get('/course', [HomeController::class, 'course'])->name('YhaCourse');
Route::get('/project', [HomeController::class, 'project'])->name('YhaProject');
Route::get('/photogallery', [HomeController::class, 'photoGallery'])->name('YhaPhotoGallery');
Route::get('/event', [HomeController::class, 'event'])->name('YhaEvent');

// admin 
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('Dashboard');
// admin Home
Route::prefix('admin')->group(function () {
    Route::get('/home', [AdminController::class, 'home'])->name('Home');
    Route::get('/course', [AdminController::class, 'course'])->name('Course');
    Route::get('/project', [AdminController::class, 'project'])->name('Project');
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('Gallery');
    Route::get('/event', [AdminController::class, 'event'])->name('Event');
});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.pages.index');
//     })->name('dashboard');


//     Route::group(['prefix' => 'home'], function() {
//         Route::get('/updateSlider', function(){

//         });
//     });

// });


