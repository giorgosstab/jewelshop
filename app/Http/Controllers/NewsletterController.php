<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function mailChimp(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) {
            Newsletter::subscribe($request->email);
            return  back()->with('success_message', 'Thanks for subscribe your e-mail!');
        }
        return back()->with( 'warning_message','Sorry! You have already subscribed this e-mail!');
    }
}
