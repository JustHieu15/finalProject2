<?php

use Illuminate\Support\Facades\Route;

// use controllers Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ClassController as AdminClassController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::prefix('class')->group(function () {
        Route::get('/create', [AdminClassController::class, 'create'])->name('admin.class.create');
        Route::post('/store', [AdminClassController::class, 'store'])->name('admin.class.store');

        Route::get('/manage/{id?}' , [AdminClassController::class, 'manage'])->name('admin.class.manage');
        Route::put('/update', [AdminClassController::class, 'update'])->name('admin.class.update');

        Route::delete('/delete', [AdminClassController::class, 'destroy'])->name('admin.class.delete');

        Route::get('/', [AdminClassController::class, 'index'])->name('admin.class.index');
    });

    Route::prefix('course')->group(function () {
        Route::get('/create', [AdminCourseController::class, 'create'])->name('admin.course.create');
        Route::post('/store', [AdminCourseController::class, 'store'])->name('admin.course.store');

        Route::get('/edit/{id?}' , [AdminCourseController::class, 'edit'])->name('admin.course.edit');
        Route::patch('/update', [AdminCourseController::class, 'update'])->name('admin.course.update');

        Route::delete('/delete', [AdminCourseController::class, 'destroy'])->name('admin.course.delete');

        Route::get('/', [AdminCourseController::class, 'index'])->name('admin.course.index');
    });

    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// User Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');
