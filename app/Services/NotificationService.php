<?php

namespace App\Services;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Throwable;


class NotificationService
{
    public function list(): Collection
    {
        //добавить грейд
        try {
            $notifications = auth()->user()->type !== User::DIRECTOR_TYPE
                ? Notification::visible()
                    ->where('user_id', auth()->id())
                    ->orderByDesc('created_at')
                    ->with(['user', 'grade'])
                    ->get()
                : Notification::orderByDesc('created_at')
                    ->with('user')
                    ->get();
        } catch (Throwable $exception) {
            Log::error($exception->getMessage());
        }

        return $notifications ?? collect();
    }

    public function createBySystem(array $data): bool
    {
        try {
            Notification::create($data);
        } catch (Throwable $exception) {
            Log::error($exception->getMessage());
            return false;
        }

        return true;
    }

    public function createByDirector(array $data): bool
    {
        try {
            Notification::create($data);
        } catch (Throwable $exception) {
            Log::error($exception->getMessage());
            return false;
        }

        return true;
    }

    public function hide(Notification $notification): bool
    {
        try {
            $notification->hidden_until = now()->addHours(6);
            $notification->save();
        } catch (Throwable $exception) {
            Log::error($exception->getMessage());
            return false;
        }

        return true;
    }

    public function delete(Notification $notification): bool
    {
        try {
            $notification->delete();
        } catch (Throwable $exception) {
            Log::error($exception->getMessage());
            return false;
        }

        return true;
    }
}
