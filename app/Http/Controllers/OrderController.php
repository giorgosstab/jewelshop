<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use \App\Mail\Order\OrderPlaced;
use Illuminate\Support\Facades\Auth;
use function view;

class OrderController extends Controller
{
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
}
