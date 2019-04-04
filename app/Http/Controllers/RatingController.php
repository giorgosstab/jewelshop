<?php

namespace App\Http\Controllers;

use App\Product;
use App\Rating;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RatingController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $product = Product::find($id);
        $user = User::find(Auth::user()->id);

        $rateExist = Rating::where('user_id',$user)->where('product_id',$product->id)->first();

        if($rateExist) {
            return back()->withErrors('You can Rate one time each product!');
        } else {
            $rate = new Rating;
            $rate->user()->associate($user);
            $rate->product()->associate($product);
            $rate->rating =  $request->star;
            $rate->save();

            return back()->with('success_message','Rate successfully added!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id',auth()->id())->with('userDetail')->firstOrFail();

        $rate = Rating::where('id',$id)->where('user_id',$user->id)->first();

        return view('shop.profile.review')->with([
            'user' => $user,
            'rate' => $rate,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rating  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'star' => 'required|numeric|gt:0'
        ]);
        if($validator->fails()){
            return back()->withErrors('Stars must be greater than zero!');
        } else {
            $user = User::find(Auth::user()->id)->first();
            $rate = Rating::where('id',$id)->where('user_id',$user->id);
            $rate->update([
                'rating' => $request->star,
            ]);
            return back()->with('success_message','Rate successfully updated!');
        }
    }
}
