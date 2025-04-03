<?php

namespace App\Http\Controllers\Api;

use App\Facades\NotificationFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNotificationFormRequest;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class NotificationController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return NotificationResource::collection(NotificationFacade::list());
    }

    public function createByDirector(CreateNotificationFormRequest $request): JsonResponse
    {
        if (NotificationFacade::createByDirector($request->validated())) {
            return response()->json(status: 201);
        }

        return response()->json(status: 400);
    }

    public function hide(Notification $notification): JsonResponse
    {
        if (NotificationFacade::hide($notification)) {
            return response()->json();
        }

        return response()->json(status: 400);
    }

    public function delete(Notification $notification): JsonResponse
    {
        if (NotificationFacade::delete($notification)) {
            return response()->json();
        }

        return response()->json(status: 400);
    }
}
