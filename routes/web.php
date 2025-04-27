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

    Route::prefix('lesson')->group(function () {
        Route::prefix('grades')->group(function () {
            Route::get('/', [GradeController::class, 'grades']);
            Route::get('/{grade}', [GradeController::class, 'grade']);
//            Route::put('/{grade}', [LessonController::class, 'editGrade'])->middleware('isDirector');
            Route::put('/deactivate-activate/{grade}', [GradeController::class, 'deactivateActivateGrade'])->middleware('isDirector');
        });
    });

});
