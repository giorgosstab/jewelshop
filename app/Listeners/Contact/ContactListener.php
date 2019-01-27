<?php

namespace App\Listeners\Contact;

use App\Events\Contact\ContactEvent;
use App\Mail\Contact\ContactMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class ContactListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ContactEvent $event)
    {
        Mail::to(Config::get('mail.from.address'),Config::get('mail.from.name'))
            ->queue(new ContactMail($event->contact));
    }
}
