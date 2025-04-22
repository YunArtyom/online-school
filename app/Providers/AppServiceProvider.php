<?php

namespace App\Providers;

use App\Models\AdditionalMaterial;
use App\Models\Grade;
use App\Models\Notification;
use App\Models\Subject;
use App\Models\Topic;
use App\Models\User;
use App\Services\NotificationService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('notification',function(){
            return new NotificationService();
        });
    }

    public function boot(): void
    {
        Route::bind('notification', function (string $value) {
            if (auth()->user()->type === User::DIRECTOR_TYPE) {
                return Notification::where('id', $value)->firstOrFail();
            }
            return Notification::where('id', $value)->where('user_id', auth()->id())->firstOrFail();
        });

        Route::bind('additionalMaterial', function (string $value) {
            return AdditionalMaterial::where('id', $value)->firstOrFail();
        });

        Route::bind('grade', function (string $value) {
            return Grade::where('id', $value)->firstOrFail();
        });

        Route::bind('subject', function (string $value) {
            return Subject::where('id', $value)->firstOrFail();
        });

        Route::bind('teacher', function (string $value) {
            return User::where('id', $value)->where('type', User::TEACHER_TYPE)->firstOrFail();
        });

        Route::bind('topic', function (string $value) {
            return Topic::where('id', $value)->firstOrFail();
        });
    }
}
