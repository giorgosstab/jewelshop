<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use \App\Mail\Order\OrderPlaced;
use Illuminate\Support\Facades\Auth;
use function view;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $unique_id
     * @return \Illuminate\Http\Response
     */
    public function show($unique_id)
    {
        try {
            $order = Order::where('unique_id', $unique_id)->firstOrFail();
            return new OrderPlaced($order);
        }
        catch(ModelNotFoundException $err){
            return redirect()->to('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $unique_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function customerShow($unique_id)
    {
        $user = User::where('id',auth()->id())->with('userDetail')->firstOrFail();
        $order = User::find(Auth::user()->id)->orders()->where('unique_id',$unique_id)->firstOrFail();

//        dd($order);

        return view('shop.profile.order')->with([
            'user' => $user,
            'order' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
