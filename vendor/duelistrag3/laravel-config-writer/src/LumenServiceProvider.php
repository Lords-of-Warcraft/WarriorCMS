<?php

namespace DuelistRag3\ConfigWriter;

use Laravel\Lumen\Application;
use DuelistRag3\ConfigWriter\ServiceProvider;

class LumenServiceProvider extends ServiceProvider
{
    /** @var  Application */
    protected $app;

    protected function getConfigPath(): string
    {
        return $this->app->getConfigurationPath();
    }
}
