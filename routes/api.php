<?php

use App\Http\Controllers\Api\AdditionalMaterialController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\LessonController;
use App\Http\Controllers\Api\NotificationController;
use Illuminate\Support\Facades\Route;

Route::post('landing-main');

Route::get('main', [AuthController::class, 'register']);

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});

Route::prefix('notification')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [NotificationController::class, 'index']);
    Route::get('hide/{notification}', [NotificationController::class, 'hide']);

    Route::middleware('isDirector')->group(function () {
        Route::post('create-by-director', [NotificationController::class, 'createByDirector']);
        Route::delete('delete-by-director/{notification}', [NotificationController::class, 'deleteByDirector']);
    });
});

Route::prefix('additional-materials')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [AdditionalMaterialController::class, 'index']);
    Route::get('/{material}', [AdditionalMaterialController::class, 'show']);

    Route::middleware('isDirector')->group(function () {
        Route::post('/', [AdditionalMaterialController::class, 'store']);
        Route::put('/{material}', [AdditionalMaterialController::class, 'update']);
        Route::delete('/{material}', [AdditionalMaterialController::class, 'destroy']);
    });
});

Route::prefix('lesson')->middleware('auth:sanctum')->group(function () {
    Route::prefix('grades')->group(function () {
        Route::get('/', [LessonController::class, 'grades']);
        Route::get('/{grade}', [LessonController::class, 'grade']);
        Route::put('/{grade}', [LessonController::class, 'editGrade'])->middleware('isDirector');
        Route::put('/deactivate-activate/{grade}', [LessonController::class, 'deactivateActivateGrade'])->middleware('isDirector');
    });

    Route::prefix('subjects')->group(function () {
        Route::post('/', [LessonController::class, 'createSubject'])->middleware('isDirector');
        Route::get('/{subject}', [LessonController::class, 'subject']);
        Route::put('/{subject}', [LessonController::class, 'editSubject'])->middleware('isDirector');
        Route::put('/deactivate-activate/{subject}', [LessonController::class, 'deactivateActivateSubject'])->middleware('isDirector');

        Route::prefix('{subject}/teachers')->group(function () {
            Route::get('/', [LessonController::class, 'teachersBySubject'])->middleware('isDirector');
            Route::get('/list', [LessonController::class, 'listFreeTeachersForSubject'])->middleware('isDirector');
            //Route::post('/{teacher}', [LessonController::class, 'addTeacherToSubject'])->middleware('isDirector');
            //Route::delete('/{teacher}', [LessonController::class, 'removeTeacherFromSubject'])->middleware('isDirector');
        });
    });
});

//Разобраться с неймингом пивот таблиц
