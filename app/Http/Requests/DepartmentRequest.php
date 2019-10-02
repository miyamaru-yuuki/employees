<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
            'dname'=>'required'
        ];
    }

    //カスタムメッセージを設定
    public function messages()
    {
        return [
            'dname.required'=>'部署名は必ず入力して下さい。'
        ];
    }
}
