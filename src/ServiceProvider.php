<?php

namespace ProtoneMedia\LaravelFormComponents\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use ProtoneMedia\LaravelFormComponents\FormDataBinder;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'form-components');
    }

}
