<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class StoreRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->username . " " . time(), '-'),
        ]);
    }
    static public function myRules(){
        return [
            'name' => 'required|string|max:255',
            'lastname_d' => 'required|string|max:255',
            'lastname_m' => 'required|string|max:255',
            'username' => 'required|string|max:30|unique:users',
            'department_id' => 'required|integer',
            'degree_study_id' => 'required|integer',
            'position' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|string|email|max:255|unique:users',
            'lada' => 'required',
            'phone_number' => 'required|numeric|min:7',
            'url_linkedin' => 'required',
            'gender' => 'required',
            'password' => 'required',
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
