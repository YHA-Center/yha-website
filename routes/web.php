<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YHAController;
use App\Http\Controllers\CourseController;

// Home Controllers
Route::get('/home', [YHAController::class, 'home'])->name('yha#home');


// cousre
Route::get('/course', [CourseController::class, 'getCourse'])->name('yha#course');

// register


// project


// timetable

