<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNcc extends FormRequest
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
            'ten'=>'unique:ncc,tenncc'
        ];
    }
    public function messages()
    {
        return [
            'ten.unique'=>'Tên nhà cung cấp đã bị trùng!'
        ];
    }
}
