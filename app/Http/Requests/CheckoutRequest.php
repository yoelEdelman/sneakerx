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
        return [
            'first_name' => 'bail|required',
            'last_name' => 'bail|required',
            'address' => 'bail|required',
            'city' => 'bail|required',
            'zip_code' => 'bail|required|numeric|min:5',
            'email' => 'bail|required|email',
            'card_number' => 'bail|required|numeric|min:16',
            'card_cvv' => 'bail|required|numeric|min:3',
            'month' => 'bail|required|numeric|min:2',
            'year' => 'bail|required|numeric|min:2',
        ];
    }
}
