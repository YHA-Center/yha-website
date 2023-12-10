<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\master\YHAController;
use App\Http\Controllers\master\EventController;
use App\Http\Controllers\master\LoginController;
use App\Http\Controllers\master\CourseController;
use App\Http\Controllers\master\SignUpController;
use App\Http\Controllers\master\ProjectController;
use App\Http\Controllers\master\RegisterController;
use App\Http\Controllers\master\PhotoGalleryController;

// Home Controllers
Route::get('/', [YHAController::class, 'home'])->name('yha#home');
Route::get('/home', [YHAController::class, 'home'])->name('yha#home');


// cousre
Route::get('/course', [CourseController::class, 'course'])->name('yha#course');

// register
Route::get('/register', [RegisterController::class, 'register'])->name('yha#register');

// project
Route::get('/project', [ProjectController::class, 'project'])->name('yha#project');

// photo-gallery
Route::get('/photogallery', [PhotoGalleryController::class, 'photoGallery'])->name('yha#photogallery');

// event
Route::get('/event', [EventController::class, 'event'])->name('yha#event');

// login
Route::get('/login', [LoginController::class, 'login'])->name('yha#login');

// signup
Route::get('/signup', [SignUpController::class, 'signup'])->name('yha#signup');

// timetable

