<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileDetailsRequest extends FormRequest
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
            'name' => 'sometimes|nullable|string|max:50',
            'email' => 'required|min:10|max:40|unique:users,email,'.auth()->id(),
            'phone' => 'sometimes|nullable|regex:/^[0-9]+$/u|min:10|max:10',
            'company' => 'sometimes|nullable|string|min:3|max:40',
        ];
    }
}
