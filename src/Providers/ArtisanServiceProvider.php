<?php

namespace BoxyBird\DirectusConfig\Providers;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Foundation\Providers\ArtisanServiceProvider as ServiceProvider;

class ArtisanServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Nothing here
     *
     * Class need for "App\Providers\MigrationServiceProvider::class" overrides
     * I have no clue why I need this class!
     */
}
