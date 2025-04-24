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

Route::prefix('director-additional-materials')->middleware(['auth:sanctum', 'isDirector'])->group(function () {
    Route::get('/', [AdditionalMaterialController::class, 'directorList']);
    Route::get('/{additionalMaterial}', [AdditionalMaterialController::class, 'directorShow']);
    Route::post('/', [AdditionalMaterialController::class, 'store']);
    Route::put('/{additionalMaterial}', [AdditionalMaterialController::class, 'update']);
    Route::delete('/{additionalMaterial}', [AdditionalMaterialController::class, 'destroy']);
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

        Route::prefix('{subject}/teachers')->middleware('isDirector')->group(function () {
            Route::get('/', [LessonController::class, 'teachersBySubject']);
            Route::get('/list', [LessonController::class, 'listFreeTeachersForSubject']);
            Route::post('/{teacher}', [LessonController::class, 'addTeacherToSubject']);
            Route::delete('/{teacher}', [LessonController::class, 'removeTeacherFromSubject']);
        });
    });

    Route::prefix('topics')->middleware('isDirector')->group(function () {
        Route::get('/', [LessonController::class, 'topics']);
        Route::get('/free', [LessonController::class, 'freeTopicsForSetting']);
        Route::post('/', [LessonController::class, 'createTopic']);
        Route::put('/{topic}', [LessonController::class, 'editTopic']);
        Route::put('/deactivate-activate/{topic}', [LessonController::class, 'deactivateActivateTopic']);
        //Route::delete('/{topic}', [LessonController::class, 'deleteTopic']);

        Route::prefix('calendar')->middleware('isDirector')->group(function () {
            Route::get('/', [LessonController::class, 'calendarWithTopics']);
            Route::get('/{calendar}', [LessonController::class, 'calendarDay']);
            Route::put('/{calendar}', [LessonController::class, 'editCalendarDay']);
            Route::post('/{calendar}/set-topic/{topic}', [LessonController::class, 'setTopicToCalendarDay']);
            Route::post('/{calendar}/unset-topic/{topic}', [LessonController::class, 'unsetTopicToCalendarDay']);
        });
    });
});

