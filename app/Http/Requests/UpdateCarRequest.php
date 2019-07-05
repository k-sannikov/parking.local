<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use App\Http\Requests\StoreCarRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends StoreCarRequest
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
        $id = $this->route('car')->id;

        return array_merge(parent::rules(), [
            'state_number' => [Rule::unique('cars')->ignore((isset($id) ? $id : "0"), 'id')],
            'place' => [Rule::unique('cars')->ignore((isset($id) ? $id : "0"), 'id')],
        ]);
    }
}
