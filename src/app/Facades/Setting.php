<?php

namespace PREPR\Settings\App\Facades;

use Illuminate\Support\Facades\Facade;
use PREPR\Settings\App\SettingsHelper;

class Setting extends Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return SettingsHelper::class;
    }
}