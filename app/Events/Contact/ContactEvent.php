<?php

namespace App\Events\Contact;

use App\ContactUs;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class ContactEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $contact;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ContactUs $contact)
    {
        $this->contact = $contact;
    }

}
