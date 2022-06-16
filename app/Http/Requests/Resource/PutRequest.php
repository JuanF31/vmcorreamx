<?php

namespace App\Http\Requests\Resource;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        return $this->merge([
            'slug' => Str::slug($this->name_resource . " " . time(), "-")
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
            'name_resource' => 'required',
            'resource' => 'mimes:png,jpg,svg,jpeg,gif,doc,docx,docm,ppt,pptm,pptx,pdf,zip,rar',
        ];
    }
}
