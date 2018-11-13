<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

//        $emailValidation = auth()->user() ? 'required|email' : 'required|email|unique:users';
        return [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'locality' => 'required',
            'country' => 'required',
            'phone' => 'required',
        ];
    }
}