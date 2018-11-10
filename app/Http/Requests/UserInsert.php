<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInsert extends FormRequest
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
            //会员添加
            "name"=>'required',
            "password"=>'required|regex:/\w{6,12}/',
            "repassword"=>'required|regex:/\w{6,12}/|same:password',
            "phone"=>'required|regex:/^1[34578]\d{9}$/'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'用户名不能为空',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码必须为6-12位任意字母数字下划线组成',
            'repassword.required'=>'确认密码不能为空',
            'repassword.regex'=>'密码必须为6-12位任意字母数字下划线组成',
            'repassword.same'=>'两次密码输入不一致',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'请输入正确的手机号'
        ];
    }
}
