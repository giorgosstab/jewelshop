<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return [
            'fname' => 'required|regex:/^[a-zA-Z]+$/u|min:3|max:15',
            'lname' => 'required|regex:/^[a-zA-Z]+$/u|min:5|max:20',
            'phone' => 'required|regex:/^[0-9]+$/u|min:10|max:10',
            'email' => 'required|email|min:10|max:50',
            'country' => 'required|not_in:0',
            'message' => 'required|min:5|max:255',
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

            'phone.required' => 'The phone number field is required.',
            'phone.regex' => 'Phone number must be only numeric and 10 numbers.',
            'phone.min' => 'Phone number must be without spaces.',
            'phone.max' => 'Phone number must be without spaces.',

            'email.required' => 'The e-mail field is required.',
            'email.email' => 'E-mail format must be like this email@example.com',
            'email.min' => 'Email must be at least 10 characters.',
            'email.max' => 'Email must be at most 50 characters.',

            'country.required' => 'Country select is required.',

            'message.required' => 'The message field is required.',
            'message.min' => 'Message must be at least 5 characters.',
            'message.max' => 'Message must be at most 255 characters.',
        ];
    }
}
