<?php

use App\Http\Controllers\Api\LessonController;
use App\Http\Controllers\Calendar\CalendarController;
use App\Http\Controllers\Class\ClassController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Topic\TopicController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\GradeController;
use Illuminate\Support\Facades\Route;



// Маршруты для аутентификации
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Группа маршрутов, доступных только после авторизации
Route::middleware(['apiAuth'])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('main');
//    Route::get('/calendar', [CalendarController::class, 'index']);
//
//    Route::post('topic/', [LessonController::class, 'createTopic']);
//    Route::get('topic/{id}', [TopicController::class, 'getForUpdate']);
    Route::get('grade', [GradeController::class, 'list']);
    Route::get('grade/{grade}', [ClassController::class, 'get']);
//    //'class-edit/{id}' - class/1/subject/1
//    Route::get('class-edit/{id}', [ClassController::class, 'getForEdit']);

});
