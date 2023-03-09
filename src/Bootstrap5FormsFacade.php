<?php

namespace CirrionSoftware\Bootstrap5Forms;

use \Illuminate\Support\Facades\Facade;

class Bootstrap5FormsFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return BootStrap5Form::class;
    }
}
