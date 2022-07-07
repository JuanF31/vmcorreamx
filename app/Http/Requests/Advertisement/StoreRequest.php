<?php

namespace App\Http\Requests\Advertisement;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    protected function prepareForValidation(){
        return $this->merge([
            'slug' => Str::slug($this->title . " " . time(), '-'),
        ]);
    }
    static public function myRules(){
        return [
            'title' => 'required|min:5|max:20|unique:advertisements',
            'department_id' => 'required',
            'mediaContent' => 'required|mimes:jpeg,jpg,png|max:10240',
            'content' => 'required|min:10|max:500'
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
