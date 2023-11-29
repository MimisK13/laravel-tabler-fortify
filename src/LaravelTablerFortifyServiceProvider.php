<?php

namespace Mimisk13\LaravelTablerFortify;

use Illuminate\Support\ServiceProvider;

class LaravelTablerFortifyServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    public function register(): void
    {
        //
    }

    public function provides(): array
    {
        return [
            //
        ];
    }

    protected function bootForConsole(): void
    {
        $this->commands([
            Console\InstallCommand::class,
        ]);
    }
}
