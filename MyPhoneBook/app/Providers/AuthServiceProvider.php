<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        //gate pour tester si le user a un role admin-> boolean retour true or false 
        Gate::define('access-admin', function(User $user){
            return $user->role === 'admin';
        });
        Gate::define('access-gestionnaire', function(User $user){
            return ($user->role === 'gestionnaire' || $user->role === 'admin');
        });
    }
}
