<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivationController extends Controller
{
    public function activate(Request $request) {
        $user = User::where('email', $request->email)->where('activation_token', $request->token)->firstOrFail();
        $user->update([
            'email_verified' => true,
            'activation_token' => null
        ]);

        Auth::loginUsingId($user->id);

        return redirect()->route('shop.home.index')->with('success_message','Successfully activated! You are sign in!');
    }
}
