<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Changeinsert extends FormRequest
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
    public function rules(){ 
            return [            
             //会员名做规则设置  
                    'pic'=>'required'
                     ];   
    }
    public function messages(){
            return [            
             //会员名做规则设置  
                   'pic.required'=>'请添加图片'  
                     ]; 

    }
}
