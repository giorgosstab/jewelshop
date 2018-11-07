<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mightAlsoLike = Product::inRandomOrder()->take(4)->get();
        return view('shop.shopping-cart.main')->with('mightAlsoLike',$mightAlsoLike);
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
        $duplicates = Cart::search(function($cartItem,$rowId) use ($request){
            return $cartItem->id === $request->id;
        });
        if ($duplicates->isNotEmpty()){
            return redirect()->route('shop.shopping-cart.index')->with('warning_message','Item is already in your cart!!');
        }
        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Product');
        return redirect()->route('shop.shopping-cart.index')->with('success_message','Item was added to your shopping cart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        Cart::remove($id);
        return back()->with('success_message','Product has been removed!!');
    }

    /**
     * Shopping cart save for later
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function saveForLater($id)
    {
        $item = Cart::instance('default')->get($id);


        $duplicates = Cart::instance('saveForLater')->search(function($cartItem, $rowId) use ($id){
            return $rowId === $id;
        });
        if ($duplicates->isNotEmpty()){
            return redirect()->route('shop.shopping-cart.index')->with('warning_message','Item is already Saved For Later!!');
        }else {

            Cart::instance('default')->remove($id);
            Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)
                ->associate('App\Product');

            return redirect()->route('shop.shopping-cart.index')->with('success_message', 'Item has moved to Saved for Later!!');
        }
    }
}