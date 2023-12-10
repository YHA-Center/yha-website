<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YHAController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;

// Home Controllers
Route::get('/', [YHAController::class, 'home'])->name('yha#home');
Route::get('/home', [YHAController::class, 'home'])->name('yha#home');


// cousre
Route::get('/course', [CourseController::class, 'course'])->name('yha#course');

// register
Route::get('/register', [RegisterController::class, 'register'])->name('yha#register');

// project
Route::get('/register', [ProjectController::class, 'register'])->name('yha#register');

// photo-gallery
Route::get('/photogallery', [PhotoGalleryController::class, 'photoGallery'])->name('yha#photogallery');

// event
Route::get('')

// login


// signup


// timetable

