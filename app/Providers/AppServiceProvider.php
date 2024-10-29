<?php

namespace App\Providers;

use App\Models\StoneModel;
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
            $stones = StoneModel::all(); // или нужный вам запрос к базе данных
            $view->with('stones', $stones);
        });
    }
}
