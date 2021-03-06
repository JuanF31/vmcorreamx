<?php

namespace App\Http\Requests\Department;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    static public function myRules(){
        return [
            'name' => 'required|string|max:50|unique:departments',
            'icon' => 'required|mimes:jpeg,jpg,png|max:10240',
            'banner' => 'required|mimes:jpeg,jpg,png|max:10240',
        ];
    }
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
        return $this->myRules();
    }
}
