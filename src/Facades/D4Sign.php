<?php

namespace Accordous\D4sign\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class D4Sign
 *
 * @mixin \Accordous\D4sign\Services\D4sign
 *
 * @package Accordous\D4sign\Facades
 */
class D4Sign extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'D4Sign';
    }

}
