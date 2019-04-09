<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateProfileAddressesRequest;
use App\Http\Requests\UpdateProfileDetailsRequest;
use App\Http\Requests\UpdateProfilePasswordRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id',auth()->id())->with('orders')->with('userDetail')->first();
        $rates = $user->ratings()->with('product')->latest()->paginate(5);
        $wishlists = Wishlist::where("user_id", "=", $user->id)->with('product')->orderby('id', 'desc')->paginate(5);

        return view('shop.profile.main')->with([
            'user' => $user,
            'rates' => $rates,
            'wishlists' => $wishlists,
        ]);
    }

//    public function getRates(Request $request){
//
//        if($request->ajax()){
//            $user = User::where('id',auth()->id())->first();
//
//
//            $rates = $user->ratings()->with('product');
//            return Datatables::of($rates)
//                ->addColumn('image_path', function ($rates) {
//                    return secure_asset('storage/'.$rates->product->image);
//                })->make(true);
//        }
//    }


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
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilePasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(UpdateProfilePasswordRequest $request)
    {
            $user = User::where('id',auth()->id())->first();

            if(Hash::check($request->old_password,$user->password)){
                $user->password = Hash::make($request->password);
                $user->save();

                //logout other user with old password after change
//                $user->logoutOtherDevices($user->password);
                Auth::login($user);
                return back()->with('success_message','Password Update Successfully!');
            } else {
                return back()->withErrors('Old Password is Wrong!');
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function updateDetails(UpdateProfileDetailsRequest $request)
    {
        $user = User::where('id',auth()->id())->first();

        $user->name = $request->name ? $request->name : $user->name;
        $user->email = $request->email ? $request->email : $user->email;
        $user->save();

        if($user->userDetail()->first()) {
            $details = new userDetail;

            $details->phone = $request->phone ? $request->phone : $details->phone;
            $details->company = $request->company ? $request->company : $details->company;

            $user->userDetail()->update([
                'phone' => $details->phone,
                'company' => $details->company
            ]);
        } else {
            $details = new userDetail;

            $details->phone = $request->phone ? $request->phone : $details->phone;
            $details->company = $request->company ? $request->company : $details->company;
            $user->userDetail()->save($details);
        }
        return back()->with('success_message','Profile Details Update Successfully!');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileAddressesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function updateAddresses(UpdateProfileAddressesRequest $request)
    {
        $user = User::where('id',auth()->id())->first();
        $details = $this->updateDetailsUser($request);

        if($user->userDetail()->first()){
            $user->userDetail()->update([
                'city' => $details->city,
                'country' => $details->country,
                'address' => $details->address,
                'house_number' => $details->house_number,
                'postal_code' => $details->postal_code,
                'locality' => $details->locality,
            ]);
        } else {
            $user->userDetail()->save($details);
        }

        return redirect()->route('shop.profile.index','#addresses-tab')->with('success_message','Profile Addresses Update Successfully!');

    }

    protected function updateDetailsUser($request){
        $details = new userDetail;
        $details->phone = $request->phone;
        $details->company = $request->company;
        $details->city = $request->city;
        $details->country = $request->country;
        $details->address = $request->address;
        $details->house_number = $request->house_number;
        $details->postal_code = $request->postal_code;
        $details->locality = $request->locality;
        return $details;
    }

}

