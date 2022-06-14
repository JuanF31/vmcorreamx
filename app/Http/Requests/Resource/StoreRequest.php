<?php

namespace App\Http\Requests\Resource;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->name_resource . ' ' . time(), '-')
        ]);
    }
    static public function myRules(){
        return [
            'name_resource' => 'required',
            'resource' => 'required|mimes:png,jpg,svg,jpeg,gif,doc,docx,docm,ppt,pptm,pptx,pdf,zip,rar',
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
