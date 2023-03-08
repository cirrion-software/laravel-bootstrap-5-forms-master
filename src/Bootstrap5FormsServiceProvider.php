<?php

namespace CirrionSoftware\Bootstrap5Forms;

use \Illuminate\Support\ServiceProvider;

class Bootstrap5FormsServiceProvider extends ServiceProvider
{

    protected $defer = true;

    public function register()
    {
        $this->app->singleton('bootstrap5-form', function () {
            return new FormService();
        });
    }

    public function provides()
    {
        return ['bootstrap5-form'];
    }
}
