<?php

namespace App\Providers;

use App\Models\TypeStone;
use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $menuData = TypeStone::with('colors')->get();

    }
}
