<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Requests\UpdateProfileDetailsRequest;
use App\Transformer\UserTransformer;
use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use League\Fractal\Manager;
use League\Fractal\Resource\Item;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthenticateController extends Controller
{
    /**
     * @var Manager
     */
    private $fractal;

    /**
     * @var ProductsTransformer
     */
    private $userTransformer;

    function __construct(Manager $fractal, UserTransformer $userTransformer)
    {
        $this->fractal = $fractal;
        $this->userTransformer = $userTransformer;
    }


    /**
     *  API Login, on success return JWT Auth token
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');
        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        // all good so return the token
        return response()->json(compact('token'));
    }


    /**
     * Log out
     * Invalidate the token, so user cannot use it anymore
     * They have to relogin to get a new token
     *
     * @param Request $request
     */
    public function logout(Request $request)
    {
        $this->validate($request, [
            'token' => 'required'
        ]);
        JWTAuth::invalidate($request->input('token'));
    }
    /**
     * Returns the authenticated user
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function authenticatedUser()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
        }
        // the token is valid and we have found the user via the sub claim
        return response()->json(compact('user'));
    }

    /**
     * Returns the authenticated user details.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $user = User::where('id',$id)->with('userDetail')->first();
        $user = new Item($user, $this->userTransformer); // Create a resource collection transformer
        $user = $this->fractal->createData($user); // Transform data
        return response()->json($user->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateDetails(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'sometimes|nullable|string|max:50',
            'email' => 'required|email|min:10|max:40|unique:users,email,'.$id,
            'phone' => 'sometimes|nullable|regex:/^[0-9]+$/u|min:10|max:10',
            'company' => 'sometimes|nullable|string|min:3|max:40',
        ]);

        $user = User::where('id',$id)->first();

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

        return response()->json(['message' => 'User Details Updated Successfully','status_code' => 200]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updatePassword(Request $request, $id)
    {
        $this->validate($request, [
            'old_password' => 'required|min:8|different:password',
            'password'     => 'required_with:old_password|min:8|confirmed',
        ]);

        $user = User::where('id',$id)->first();

        if(Hash::check($request->old_password,$user->password)){
            $user->password = Hash::make($request->password);
            $user->save();

            return response()->json(['message' => 'Password Update Successfully','status_code' => 200]);
        } else {
            return response()->json(['message' => 'Old Password is Wrong','status_code' => 204]);
        }
    }

    /**
     * Refresh the token
     *
     * @return mixed
     */
    public function getToken(){
        $token = JWTAuth::getToken();

        if (!$token) {
            return response()->json(['message'=>'405 Method Not Allowed', 'status_code'=>405]);
        }
        try {
            $refreshedToken = JWTAuth::refresh($token);
        } catch (\JWTException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
        }
        return response()->json(compact('refreshedToken'));
    }
}
