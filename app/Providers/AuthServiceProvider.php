<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
<<<<<<< HEAD
=======
use Laravel\Passport\Passport;
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023

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

<<<<<<< HEAD
        //
=======
        Passport::routes();
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
    }
}
