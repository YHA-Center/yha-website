<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
// use App\Http\Controllers\HomeController;

// // Home Controllers
// Route::get('/', [HomeController::class, 'home'])->name('YhaHome');
// Route::get('/home', [HomeController::class, 'home'])->name('YhaHome');
// Route::get('/course', [HomeController::class, 'course'])->name('YhaCourse');
// Route::get('/project', [HomeController::class, 'project'])->name('YhaProject');
// Route::get('/photogallery', [HomeController::class, 'photoGallery'])->name('YhaPhotoGallery');
// Route::get('/event', [HomeController::class, 'event'])->name('YhaEvent');

// admin 
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('Dashboard');
// admin Home
Route::prefix('admin')->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('Home');
    Route::get('/teacher', [TeacherController::class, 'teacherPage'])->name('Teacher');
    Route::get('/course', [CourseController::class, 'coursePage'])->name('Course');

    // for welcome home section
    Route::prefix('home')->group(function () {
        Route::get('/create', [HomeController::class, 'createWelcome'])->name('home.create');
        Route::post('/post', [HomeController::class, 'postWelcome'])->name('home.post');
        Route::get('/edit/{id}', [HomeController::class, 'editWelcome'])->name('home.edit');
        Route::post('/update', [HomeController::class, 'updateWelcome'])->name('home.update');
        Route::get('/delete/{id}', [HomeController::class, 'deleteWelcome'])->name('home.delete');
    });

    //for about sectoin
    Route::prefix('about')->group(function () {
        Route::get('/post', [HomeController::class, 'postAbout'])->name('about.home');
        Route::post('/create', [HomeController::class, 'createAbout'])->name('about.create');
        Route::get('/edit/{id?}', [HomeController::class, 'editAbout'])->name('about.edit');
        Route::get('/delete/{id}', [HomeController::class, 'deleteAbout'])->name('about.delete');
        Route::post('/update', [HomeController::class, 'updateAbout'])->name('about.update');
        Route::get('/desc/edit/{id}', [HomeController::class, 'editDesc'])->name('about.desc.edit');
        Route::post('/desc/update', [HomeController::class, 'updateDesc'])->name('about.desc.update');
    });

    //for student project section
    Route::prefix('student_project')->group(function () {
        Route::get('/post', [HomeController::class, 'postProject'])->name('student_project.home');
        Route::post('/create', [HomeController::class, 'createProject'])->name('student_project.create');
        Route::get('/delete/{id}', [HomeController::class, 'deleteProject'])->name('student_project.delete');
        Route::get('/edit/{id}', [HomeController::class, 'editProject'])->name('student_project.edit');
        Route::post('/update', [HomeController::class, 'updateProject'])->name('student_project.update');
    });

    // for teacher section
    Route::prefix('teacher')->group(function () {
        Route::get('/createPage', [TeacherController::class, 'createPage'])->name('teacher.createPage');
        Route::post('/create', [TeacherController::class, 'create'])->name('teacher.create');
        Route::get('/edit/{id}', [TeacherCOntroller::class, 'edit'])->name('teacher.edit');
        Route::post('/update', [TeacherCOntroller::class, 'update'])->name('teacher.update');
        Route::get('/delete/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');
    });

    // for course section
    Route::prefix('course')->group(function () {
        Route::get('/createPage', [CourseController::class, 'createPage'])->name('course.createPage');
        Route::post('/create', [CourseController::class, 'create'])->name('course.create');
        Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
        Route::post('/update', [CourseController::class, 'update'])->name('course.update');
        Route::get('/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');
    });
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


