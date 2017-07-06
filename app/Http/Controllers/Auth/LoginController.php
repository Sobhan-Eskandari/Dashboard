<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->middleware('guest', ['except' => 'logout']);
=======
        $this->middleware('guest', ['except' => ['userLogout','logout']]);
    }

    public function userLogout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
    }
}
