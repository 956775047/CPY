<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddChoiceinsert extends FormRequest
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
            //
            'model'=>'required',
            'time'=>'required',
            'size'=>'regex:/\d/'
        ];
    }

    public function messages(){
        return [
            'model.required'=>'型号不能为空',
            'time.required'=>'上市时间不能为空',
            'size.regex'=>'请输入正确大小'
        ];
    }
}
