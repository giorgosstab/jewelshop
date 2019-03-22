<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileAddressesRequest extends FormRequest
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
            'city' => 'sometimes|nullable|string|max:30',
            'country' => 'sometimes|nullable|string|max:20',
            'address' => 'sometimes|nullable|string|max:35',
            'house_number' => 'sometimes|nullable|regex:/^[0-9]+$/u||min:1|max:3',
            'postal_code' => 'sometimes|nullable|regex:/^[0-9]+$/u||min:5|max:5',
            'locality' => 'sometimes|nullable|string|min:5|max:20',
        ];
    }
}
