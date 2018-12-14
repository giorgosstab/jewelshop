<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use function session;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        session()->put('previousUrl', url()->previous());
        return view('auth.login');
    }

    public function redirectTo()
    {
        return str_replace(url('/'), '', session()->get('previousUrl', '/'));
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => [
                'required','string',
                Rule::exists('users')->where(function($query) {
                    $query->where('email_verified',true);
                })
            ],
            'password' => 'required|string',
        ], $this->validationError());
    }

    /**
     * Get the validation error for login
     *
     * @return array
     */
    public function validationError() {
        return [
            $this->username() . '.exists' => 'The selected E-mail is invalid or you need to activate your account!'
        ];
    }
}
