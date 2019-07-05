<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'state_number' => ['required', 'string', 'max:255', 'unique:cars'],
            'place' => ['required', 'integer', 'min:1', 'max:50', 'unique:cars'],
            'full_name' => ['required', 'string', 'max:255'],
            'passport_series' => ['required', 'string',],
            'passport_number' => ['required', 'string',],
        ];
    }
}
