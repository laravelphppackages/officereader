<?php

namespace Laravelphp\Officereade\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class OfficeReaderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }

    public function register()
    {
    }
}