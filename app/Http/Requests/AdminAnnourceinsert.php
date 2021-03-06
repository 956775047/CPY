<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminAnnourceinsert extends FormRequest
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
           'title'=>'required',
           'descr'=>'required'
        ];
    }

     //自定义错误消息
    public function messages(){
        return [
               'title.required'=>'标题不能为空',
               'descr.required'=>'内容不能为空'
               
                ];
    }
}
