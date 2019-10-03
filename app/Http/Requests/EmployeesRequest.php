<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeesRequest extends FormRequest
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
            'ename'=>'required'
        ];
    }

    //カスタムメッセージを設定
    public function messages()
    {
        return [
            'ename.required'=>'従業員名は必ず入力して下さい。'
        ];
    }
}
