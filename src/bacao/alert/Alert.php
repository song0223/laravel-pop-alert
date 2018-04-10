<?php

namespace Bacao\Alert;

use Illuminate\Support\Facades\Facade;

class Alert extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'bcalert';
    }
}