<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserDeviceRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ip_address' => 'required|string|max:191',
            'device_type' => 'required|string|max:191',
            'browser' => 'required|string|max:191',
            'user_agent' => 'required|string|max:191',
        ];
    }
}
