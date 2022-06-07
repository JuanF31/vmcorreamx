<?php

namespace App\Http\Requests\Department;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
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
            'name' => 'required|string|max:50|unique:departments,slug,' . $this->route('department')->id,
            'icon' => 'mimes:jpeg,jpg,png|max:10240',
        ];
    }
}
