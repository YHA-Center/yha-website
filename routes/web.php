<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YHAController;
use App\Http\Controllers\CourseController;

// Home

Route::get('/home', [YHAController::class, 'home'])->name('yha#home');
Route::get('/course', [CourseController::class, 'getCourse'])->name('yha#course');


// cousre


// register


// project


// timetable

