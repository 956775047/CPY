<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //表单授权
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //设置效验规则
    public function rules()
    {
        return [
         
            'name'=>'required|unique:cate',
 
        ];
    }


    //自定义错误信息
    public function messages(){
        return [

            'name.required'=>'分类名不能为空',
            'name.unique'=>'分类名已经存在',

              ];
    }
}
