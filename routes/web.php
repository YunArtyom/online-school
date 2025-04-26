<?php

use App\Http\Controllers\Api\LessonController;
use App\Http\Controllers\Calendar\CalendarController;
use App\Http\Controllers\Class\ClassController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Topic\TopicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;


// Маршруты для аутентификации
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Группа маршрутов, доступных только после авторизации
Route::middleware(['auth'])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('main');
    Route::get('/calendar', [CalendarController::class, 'index']);

    Route::post('topic/', [LessonController::class, 'createTopic']);
    Route::get('topic/{id}', [TopicController::class, 'getForUpdate']);
    Route::get('class', [ClassController::class, 'list']);
    Route::get('class/{id}', [ClassController::class, 'get']);
    Route::get('class-edit/{id}', [ClassController::class, 'getForEdit']);

});
