<?php

namespace MimisK13\LaravelTablerFortify\Console;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command implements PromptsForMissingInput
{
    protected $signature = 'tabler:install-fortify';

    protected $description = 'Install Tabler UI on Laravel\Fortify';

    public function handle(): void
    {
        // MIGRATION
        (new Filesystem)->ensureDirectoryExists(database_path('migrations'));
        (new Filesystem)->copy(__DIR__.'/../../database/migrations/2014_10_12_200000_add_two_factor_columns_to_users_table.php',
            database_path('migrations/2014_10_12_200000_add_two_factor_columns_to_users_table.php'));

        // SERVICE PROVIDER
        (new Filesystem)->ensureDirectoryExists(app_path('Providers'));
        (new Filesystem)->copy(__DIR__.'/../../src/Providers/FortifyServiceProvider.php', app_path('Providers/FortifyServiceProvider.php'));

        // CONFIG
        (new Filesystem)->ensureDirectoryExists(base_path('config'));
        (new Filesystem)->copy(__DIR__.'/../../config/fortify.php', base_path('config/fortify.php'));

        // ACTIONS
        (new Filesystem)->ensureDirectoryExists(app_path('Actions'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../src/Actions', app_path('Actions'));

        // LAYOUT
        (new Filesystem)->ensureDirectoryExists(resource_path('views/layouts'));
        (new Filesystem)->copy(__DIR__.'/../../resources/views/layouts/auth.blade.php', resource_path('views/layouts/auth.blade.php'));

        // VIEWS
        (new Filesystem)->ensureDirectoryExists(resource_path('views/auth'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../resources/views/auth', resource_path('views/auth'));

        // ROUTES
        $packageRoutes = file_get_contents(__DIR__.'/../../routes/web.php');

        // get current file routes
        $routes = file_get_contents(base_path('routes/web.php'));

        // add all
        file_put_contents(
            filename: base_path('routes/web.php'),
            data: [$routes, $packageRoutes]
        );
    }
}
