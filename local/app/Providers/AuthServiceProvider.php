<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);

        $gate->define('be-admin', function ($user) {
            return $user->role == 'admin';
        });

        $gate->define('be-supervisor', function ($user) {
            return $user->role == 'supervisor';
        });

        $gate->define('be-user', function ($user) {
            return $user->role == 'user';
        });

        $gate->define('be-cs', function ($user) {
            return $user->role == 'cs';
        });

        $gate->define('be-teller', function ($user) {
            return $user->role == 'teller';
        });

        $gate->define('be-adm', function ($user) {
            return $user->role == 'adm';
        });
        $gate->define('be-finance', function ($user) {
            return $user->role == 'finance';
        });

        $gate->define('be-ao', function ($user) {
            return $user->role == 'ao';
        });

        $gate->define('be-report', function ($user) {
            return $user->role == 'report';
        });

        $gate->define('be-kas', function ($user) {
            return $user->role == 'kas';
        });

        $gate->define('be-legal', function ($user) {
            return $user->role == 'legal';
        });

        //
    }
}
