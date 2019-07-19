<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	
	// // // public function authenticate()
    // // // {
        // // // if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // // // // Authentication passed...
            // // // return redirect()->intended('dashboard');
        // // // }
    // // // }
	
	// // // public function username()
    // // // {
        // // // $identity  = request()->get('email');
        // // // $fieldName = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        // // // request()->merge([$fieldName => $identity]);
        // // // return $fieldName;
    // // // }
	
	// // // protected function validateLogin(Request $request)
    // // // {
        // // // $this->validate(
            // // // $request,
            // // // [
                // // // 'identity' => 'required|string',
                // // // 'password' => 'required|string',
            // // // ],
            // // // [
                // // // 'identity.required' => 'Username or email is required',
                // // // 'password.required' => 'Password is required',
            // // // ]
        // // // );
    // // // }
	
	
}
