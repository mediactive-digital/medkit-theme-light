<?php

namespace MediactiveDigital\MedKitTheme\Facades;

use Illuminate\Support\Facades\Facade;

class MedKitTheme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'medkittheme';
    }
}
