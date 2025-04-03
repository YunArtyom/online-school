<?php

namespace App\Facades;

use App\Models\Notification;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * Class NotificationFacade
 * @package App\Facades
 *
 * @method static boolean createBySystem(array $data)
 * @method static boolean createByDirector(array $data)
 * @method static Collection list()
 * @method static boolean hide(Notification $notification)
 * @method static boolean delete(Notification $notification)
 *
 * @see \App\Services\NotificationService
 */
class NotificationFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'notification';
    }
}
