<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminShopRequest extends FormRequest
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
         

            'name'=>'required|unique:goods',
            'pic'=>'required|unique:goods',
            // 'descr'=>'required|unique:goods',
            'price'=>'required|unique:goods',
            'num'=>'required|unique:goods',
            
        ];
    }


    //自定义错误信息
    public function messages(){
        return [

            'name.required'=>'商品名不能为空',
            'name.unique'=>'商品名已经存在',
            'pic.required'=>'商品图片不能为空',
            // 'descr.required'=>'描述不能为空',
            'price.required'=>'价格不能为空',
            'num.required'=>'数量不能为空',
              ];
    }
}
