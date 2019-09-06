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

        $emailValidation = auth()->user() ? 'required|email|min:10|max:50' : 'required|email|min:10|max:50|unique:users';
        return [
            'fname' => 'required|regex:/^[a-zA-Z]+$/u|min:3|max:15',
            'lname' => 'required|regex:/^[a-zA-Z]+$/u|min:5|max:20',
            'email' => $emailValidation,
            'address' => 'required|alpha_dash|numeric|min:5|max:45',
            'city' => 'required|regex:/^[a-zA-Z]+$/u|min:5|max:20',
            'zip_code' => 'required|numeric|min:10000|max:99999',
            'locality' => 'required|regex:/^[a-zA-Z]+$/u|min:5|max:20',
            'country' => 'required|not_in:0',
            'phone' => 'required|regex:/^[0-9]+$/u|min:10|max:10',
            'instructions' => 'sometimes',

            'dif_shipping' => 'sometimes',

            'fname_sec' => 'required_with:dif_shipping,on|regex:/^[a-zA-Z]+$/u|min:3|max:15|nullable',
            'lname_sec' => 'required_with:dif_shipping,on|regex:/^[a-zA-Z]+$/u|min:5|max:20|nullable',
            'email_sec' => 'required_with:dif_shipping,on|email|nullable',
            'address_sec' => 'required_with:dif_shipping,on|regex:/^[A-Za-z0-9 ]+$/u|min:5|max:45|nullable',
            'city_sec' => 'required_with:dif_shipping,on|regex:/^[a-zA-Z]+$/u|min:5|max:20|nullable',
            'zipcode_sec' => 'required_with:dif_shipping,on|numeric|min:10000|max:99999|nullable',
            'locality_sec' => 'required_with:dif_shipping,on|regex:/^[a-zA-Z]+$/u|min:5|max:20|nullable',
            'country_sec' => 'required_with:dif_shipping,on|not_in:0|nullable',
            'phone_sec' => 'required_with:dif_shipping,on|regex:/^[0-9]+$/u|min:10|max:10|nullable',

            'delivery' => 'required',

            'agree' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'fname.required' => 'The first name field is required.',
            'fname.regex' => 'First Name must be only characters.',
            'fname.min' => 'First Name must be at least 3 characters.',
            'fname.max' => 'First Name must be at most 15 characters.',

            'lname.required' => 'The last name field is required.',
            'lname.regex' => 'Last Name must be only characters.',
            'lname.min' => 'Last Name must be at least 5 characters.',
            'lname.max' => 'Last Name must be at most 20 characters.',

            'email.required' => 'The e-mail field is required.',
            'email.email' => 'E-mail format must be like this email@example.com',
            'email.min' => 'Email must be at least 10 characters.',
            'email.max' => 'Email must be at most 50 characters.',
            'email.unique' => 'You already have an account with this email address.Please <strong style="color:#FEAF20">'. link_to(url('login'), '<login here>') .' </strong>to continue',

            'address.required' => 'The address field is required.',
            'address.regex' => 'Address must be only characters and numbers.',
            'address.min' => 'Address must be at least 5 characters.',
            'address.max' => 'Address must be at most 45 characters.',

            'city.required' => 'The city field is required.',
            'city.regex' => 'City must be only characters.',
            'city.min' => 'City must be at least 5 characters.',
            'city.max' => 'City must be at most 20 characters.',

            'zip_code.required' => 'The postal code field is required.',
            'zip_code.numeric' => 'Postal code must be numeric and 5 numbers.',
            'zip_code.min' => 'Postal code must be numeric and 5 numbers.',
            'zip_code.max' => 'Postal code must be numeric and 5 numbers.',

            'locality.required' => 'The locality field is required.',
            'locality.numeric' => 'Locality must be only characters.',
            'locality.min' => 'Locality must be at least 5 characters.',
            'locality.max' => 'Locality must be at most 20 characters.',

            'country.required' => 'Country select is required.',

            'phone.required' => 'The phone number field is required.',
            'phone.regex' => 'Phone number must be only numeric and 10 numbers.',
            'phone.min' => 'Phone number must be without spaces.',
            'phone.max' => 'Phone number must be without spaces.',

            'fname_sec.required_with' => 'The second first name field is required when different shipping is checked.',
            'fname_sec.regex' => 'Second First Name must be only characters.',
            'fname_sec.min' => 'Second First Name must be at least 3 characters.',
            'fname_sec.max' => 'Second First Name must be at most 15 characters.',

            'lname_sec.required_with' => 'The second last name field is required when different shipping is checked.',
            'lname_sec.regex' => 'Second Last Name must be only characters.',
            'lname_sec.min' => 'Second Last Name must be at least 5 characters.',
            'lname_sec.max' => 'Second Last Name must be at most 20 characters.',

            'email_sec.required_with' => 'The second e-mail field is required when different shipping is checked.',
            'email_sec.email' => 'Second E-mail format must be like this email@example.com',

            'address_sec.required_with' => 'The second address field is required when different shipping is checked.',
            'address_sec.regex' => 'Second Address must be only characters and numbers.',
            'address_sec.min' => 'Second Address must be at least 5 characters.',
            'address_sec.max' => 'Second Address must be at most 45 characters.',

            'city_sec.required_with' => 'The second city field is required when different shipping is checked.',
            'city_sec.regex' => 'Second City must be only characters.',
            'city_sec.min' => 'Second City must be at least 5 characters.',
            'city_sec.max' => 'Second City must be at most 20 characters.',

            'zipcode_sec.required_with' => 'The second postal code field is required when different shipping is checked.',
            'zipcode_sec.numeric' => 'Second Postal code must be numeric and 5 numbers.',
            'zipcode_sec.min' => 'Second Postal code must be numeric and 5 numbers.',
            'zipcode_sec.max' => 'Second Postal code must be numeric and 5 numbers.',

            'locality_sec.required_with' => 'The second locality field is required when different shipping is checked.',
            'locality_sec.numeric' => 'Second Locality must be only characters.',
            'locality_sec.min' => 'Second Locality must be at least 5 characters.',
            'locality_sec.max' => 'Second Locality must be at most 20 characters.',

            'country_sec.required_with' => 'Second Country select is required when different shipping is checked.',

            'phone_sec.required_with' => 'The second phone number field is required when different shipping is checked.',
            'phone_sec.regex' => 'Second Phone number must be only numeric and 10 numbers.',
            'phone_sec.min' => 'Second Phone number must be without spaces.',
            'phone_sec.max' => 'Second Phone number must be without spaces.',

            'delivery.required' => 'The delivery radio button is required.',

            'agree.required' => 'You must agree to the terms and conditions.',
        ];
    }
}
