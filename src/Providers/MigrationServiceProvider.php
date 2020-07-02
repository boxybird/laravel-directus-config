<?php

namespace BoxyBird\DirectusConfig\Providers;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Database\MigrationServiceProvider as ServiceProvider;

class MigrationServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Comment out artisan migration commands
     *
     * Most migration are handled by Directus CMS admin
     */
    protected $commands = [
        'Migrate'         => 'command.migrate',
        // Avoids dropping Directus tables
        // 'MigrateFresh'    => 'command.migrate.fresh',
        'MigrateInstall'  => 'command.migrate.install',
        'MigrateRefresh'  => 'command.migrate.refresh',
        'MigrateReset'    => 'command.migrate.reset',
        'MigrateRollback' => 'command.migrate.rollback',
        'MigrateStatus'   => 'command.migrate.status',
        // Avoids creating tables outside Directus
        // 'MigrateMake'     => 'command.migrate.make',
    ];
}
