<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
       $this->registerPolicies();

        Gate::define('isAdmin', function($admin){
            return $admin->role == 'admin';
        });
        Gate::define('isSiswa', function($admin){
            return $admin->role == 'sales';
        });
        Gate::define('isAdminSiswa', function($admin){
            return $admin->role == 'sales' or 'admin';
        });
    }
}
