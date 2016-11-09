<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        \Auth::provider('lightning', function ($app, array $config) {
           return new \App\Auth\LightningUserProvider(
                $app->make('hash'),
                $config['model']);
        });

        \Auth::extend('custom', function ($app, $name) {
            return new \App\Auth\EnhancedGuard(
                $name,
                \Auth::createUserProvider('lightning'),
                $app['session.store'],
                $app['request']
            );
        });
    }
}
