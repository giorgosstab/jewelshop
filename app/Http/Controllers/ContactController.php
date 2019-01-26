<?php

namespace App\Http\Controllers;

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

    }
}
