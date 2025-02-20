<?php

namespace Sosuke\MakeDomain;

use Illuminate\Support\ServiceProvider;
use Sosuke\MakeDomain\Console\Commands\MakeDomainCommand;
use Sosuke\MakeDomain\Console\Commands\MakeEntityCommand;
use Sosuke\MakeDomain\Console\Commands\MakeFactoryCommand;
use Sosuke\MakeDomain\Console\Commands\MakeRepositoryCommand;
use Sosuke\MakeDomain\Console\Commands\MakeServiceCommand;

class MakeDomainCommandServiceProvider extends ServiceProvider
{
    protected $commands = [
        MakeDomainCommand::class,
        MakeEntityCommand::class,
        MakeFactoryCommand::class,
        MakeRepositoryCommand::class,
        MakeServiceCommand::class,
    ];

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
