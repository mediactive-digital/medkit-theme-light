<?php

namespace MediactiveDigital\MedKitThemeLight\Facades;

use Illuminate\Support\Facades\Facade;

class MedKitThemeLight extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'medkitthemelight';
    }
}
