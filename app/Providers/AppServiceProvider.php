<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

use App\Models\User;
use App\Models\Resenha;
use Illuminate\Auth\Access\Response;
use App\Policies\ResenhaPolicy;
use App\Policies\UserPolicy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Gate::define('mostrar-resenha',[ResenhaPolicy::class, 'mostrar']);
        Gate::define('update-resenha', [ResenhaPolicy::class, 'atualizar']);
        Gate::define('ver-user',[UserPolicy::class, 'ver']);
    }
}
