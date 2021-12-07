<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStore extends FormRequest
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
            'name' => 'required | max:50',
            'last_name' => 'required | max:50',
            'document_type' => 'required',
            'document' => 'required | min:6 | max: 12 | unique:users',
            'blood_type' => 'required',
            'latitude' => 'required | min:2',
            'longitude' => 'required | min:2',
            'email' => 'required | max:100 | unique:users',
            'password' => 'required | min:8 | confirmed',
        ];
    }
}
