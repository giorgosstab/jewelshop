<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Events\Contact\ContactEvent;
use App\Http\Requests\ContactRequest;
use Mapper;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Mapper::map(38.24808000000, 22.08052000000, ['markers' => ['title' => 'Jewel Shop Aigio', 'animation' => 'DROP'], 'overlay' => 'TRAFFIC']);
        return view('shop.contact.main');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\ContactRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $contact = ContactUs::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phone' => $request->phone,
            'email' => $request->email,
            'country' => $request->country,
            'message' => $request->message,
        ]);

        event(new ContactEvent($contact));

        return redirect()->route('shop.contact.index')->with('success_message','Thank you! Your message has been send successfully! <br>We will contact as soon as possible!');
    }
}
