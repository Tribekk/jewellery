<?php

namespace App\Providers;

use App\Models\StoneModel;
use App\Models\TypeStone;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.header', function ($view) {
            $typesWithColors = TypeStone::with(['stones.colorBelongsTo'])
                ->get()
                ->map(function ($type) {
                    $uniqueColors = $type->stones->pluck('colorBelongsTo')->unique('id');
                    return [
                        'type' => $type->name,
                        'colors' => $uniqueColors,
                    ];
                });
            $view->with('typesWithColors', $typesWithColors);
        });
    }
}
