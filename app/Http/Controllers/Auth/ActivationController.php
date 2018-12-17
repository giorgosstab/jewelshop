<?php

namespace App\Http\Controllers\Auth;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Auth\UserActivationEmail;
use Auth;

class ActivationController extends Controller
{
    public function activate(Request $request) {
        $user = User::byActivationColumns($request->email, $request->token)->firstOrFail();
        $user->update([
            'email_verified' => true,
            'activation_token' => null
        ]);

        Auth::loginUsingId($user->id);

        return redirect()->route('shop.home.index')->with('success_message','Successfully activated! You are sign in!');
    }

    public function showResendForm() {
        return view('auth.passwords.resend');
    }

    public function resend(Request $request) {
        $this->validateResendRequest($request);

        $user = User::where('email', $request->email)->first();
        event(new UserActivationEmail($user));

        return redirect()->route('login')->with('success_message','Email activation has been resend!');
    }

    protected function validateResendRequest(Request $request) {
        $this->validate($request , [
           'email' => 'required|email|exists:users,email',
        ], [
            'email.exists' => 'This email is not exists. Please check your email'
        ]);
    }
}
