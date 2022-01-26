<?php

namespace Liteas98\Colorconverter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Liteas98\Colorconverter\Skeleton\SkeletonClass
 */
class ColorconverterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'colorconverter';
    }
}
