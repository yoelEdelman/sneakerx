<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'bail|required',
            'description' => 'bail|required',
            'image' => 'bail|required',
            'images' => 'bail|required',
            'price' => 'bail|required|numeric',
            'color' => 'bail|required',
            'size' => 'bail|required',
            'qty' => 'bail|required|numeric',
            'release_date' => 'bail|required',
            'is_published' => 'bail|required',
            'brand' => 'bail|required'
        ];
    }
}
