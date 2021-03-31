<?php

namespace AmirNajmi\ReadTime\Facades;

use Illuminate\Support\Facades\Facade;

class ReadTime extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'readtime';
    }
}
