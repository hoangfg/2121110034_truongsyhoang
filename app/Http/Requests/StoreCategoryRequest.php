<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           'name' => 'required|string|min:5',
            'metakey' => 'required|min:5',
            'metadesc' => 'required|min:5',

        ];
    }

    public function messages()
    {
        $messages=[
            'required'=>'Bạn chưa điền vào đây'
        ];
        return [
            'name.required' => $messages['required'],
            'name.min' =>'Nhập ít nhất 5 ký tự',
            'metakey.required' => $messages['required'],
            'metakey.min' => 'Nhập ít nhất 5 ký tự',
            'metadesc.required' => $messages['required'],
            'metadesc.min' => 'Nhập ít nhất 5 ký tự',
            
        ];
    }
}
