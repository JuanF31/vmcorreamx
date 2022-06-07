<?php

namespace App\Http\Requests\Organizational_chart;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->title, '-')
        ]);
    }
    static public function myRules(){
        return [
            'title' => 'required|unique:organizational_charts',
            'uri_flipbook' => 'required',
            'uri_flipbook_cover' => 'required'
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
