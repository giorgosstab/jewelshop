<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;

class SaveForLaterController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('saveForLater')->remove($id);
        return back()->with('success_message','Product has been removed!!');
    }

    /**
     * Switch item from saved for later to cart
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToCart($id)
    {
        $item = Cart::instance('saveForLater')->get($id);

        $duplicates = Cart::instance('default')->search(function($cartItem, $rowId) use ($id){
            return $rowId === $id;
        });
        if ($duplicates->isNotEmpty()){
            return redirect()->route('shop.shopping-cart.index')->with('warning_message','Item is already in your Cart!!');
        }

        Cart::instance('saveForLater')->remove($id);

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Product');
        return redirect()->route('shop.shopping-cart.index')->with('success_message','Item has moved to to Cart!!');

    }
}
