<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Policies\SongPolicy;
use App\Policies\FilePolicy;
use App\Policies\ChordPolicy;
use Illuminate\Support\Facades\Gate;
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
        Paginator::useBootstrap();
        Gate::define('modify-song', [SongPolicy::class, 'modify']);
        Gate::define('delete-song', [SongPolicy::class, 'delete']);

        Gate::define('modify-file', [FilePolicy::class, 'modify']);
        Gate::define('delete-file', [FilePolicy::class, 'delete']);

        Gate::define('modify-chord', [ChordPolicy::class, 'modify']);
        Gate::define('delete-chord', [ChordPolicy::class, 'delete']);
        
    }
}