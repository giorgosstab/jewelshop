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
            'First Name' => 'required',
            'Last Name' => 'required',
            'E-mail' => 'required|email',
            'Address' => 'required',
            'City' => 'required',
            'Postal Code' => 'required',
            'locality' => 'required',
            'Country' => 'required',
            'Phone Number' => 'required',
        ];
    }
}
