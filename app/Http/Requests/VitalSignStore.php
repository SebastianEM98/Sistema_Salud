<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VitalSignStore extends FormRequest
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
            'oximetry' => 'required | max:20',
            'b_frequency' => 'required | max:20',
            'h_rate' => 'required | max:20',
            'temperature' => 'required | max:20',
            'b_pressure' => 'required | max:20',
            'glycemia' => 'required | max:20',
        ];
    }
}
