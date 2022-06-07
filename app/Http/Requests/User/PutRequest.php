<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class PutRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->username . " " . time(), '-'),
        ]);
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
        return [
            'name' => 'required|string|max:255',
            'lastname_d' => 'required|string|max:255',
            'lastname_m' => 'required|string|max:255',
            'username' => 'required|string|max:30|unique:users,username,' . $this->route('user')->id,
            'department_id' => 'required',
            'degree_study_id' => 'required',
            'position' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|string|email|max:255|unique:users,email,' . $this->route('user')->id,
            'lada' => 'required',
            'phone_number' => 'required|numeric|min:7',
            'url_linkedin' => 'required',
            'gender' => 'required',
            'profile_avatar' => 'mimes:jpeg,jpg,png|max:10240',
        ];
    }

}
