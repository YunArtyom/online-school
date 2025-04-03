<?php

namespace App\Providers;

use App\Models\AdditionalMaterial;
use App\Models\AdditionalMaterialPurchase;
use App\Models\Grade;
use App\Models\Notification;
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

        Route::bind('material', function (string $value) {
            if (auth()->user()->type === User::DIRECTOR_TYPE) {
                return AdditionalMaterial::where('id', $value)->firstOrFail();
            }

            AdditionalMaterialPurchase::where('material_id', $value)->where('user_id', auth()->id())->firstOrFail();

            return AdditionalMaterial::where('id', $value)->firstOrFail();
        });

        Route::bind('grade', function (string $value) {
            return Grade::where('id', $value)->firstOrFail();
        });
    }
}
