<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminChoiceinsert extends FormRequest
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
            //精选添加
            "name"=>"required|unique:choiceness",
            "news"=>"required",
            "price"=>"required|regex:/\d/",
            "num"=>"required|regex:/\d/",
            "pic"=>"required",
            "d_price"=>"required|regex:/^\d{1}(\.\d{1})$/",
            "brank"=>"required"
        ];
    }

    //自定义错误信息
    public function messages(){
        return[
            'name.required'=>'商品名称不能为空',
            'name.unique'=>'商品名重复',
            'news.required'=>'信息不能为空',
            'price.required'=>'市场价不能为空',
            'price.regex'=>'请输入数字',
            'num.required'=>'数量不能为空',
            'num.regex'=>'请输入数字',
            'pic.required'=>'图片不能为空',
            'd_price.required'=>'折扣价不能为空',
            'd_price.regex'=>'请输入正确的折扣价 比如 8.8',
            'brank.required'=>'品牌不能为空'
        ];
    }
}
