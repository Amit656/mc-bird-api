<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonalDetailRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'day' => 'required|integer|min:1|max:31',
            'month' => 'required|integer|min:1|max:12',
            'year' => 'required|integer|min:1910|max:2002',
            'email' => 'required|email|unique:personal_details,email',
            'phone' => 'required|integer|unique:personal_details,phone',
            'address' => 'nullable|array',
        ];

    }
}
