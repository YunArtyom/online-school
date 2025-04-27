<?php

namespace App\Facades;

use App\Services\ApiCall;
use Illuminate\Support\Facades\Facade;


class ApiCallFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ApiCall::class;
    }
}
