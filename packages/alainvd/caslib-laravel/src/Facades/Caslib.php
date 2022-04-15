<?php

namespace Alainvd\Caslib\Facades;

use Illuminate\Support\Facades\Facade;

class Caslib extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * Futher CAS Documentation: http://downloads.jasig.org/cas-clients/php/1.1.0RC7/docs/api/group__publicAuth.html#
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        dd('facade');
        return 'caslib';
    }
}
