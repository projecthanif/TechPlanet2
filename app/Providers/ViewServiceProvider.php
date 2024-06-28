<?php

namespace App\Providers;

use App\View\Composers\{NavBarComposer,StyleComposer};
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        View::composer('components._partials.navbar', NavBarComposer::class);
        View::composer('components._partials.head', StyleComposer::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
