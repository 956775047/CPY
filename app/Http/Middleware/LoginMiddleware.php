<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        //判断 过滤规则
        //检测是否具有用户登录的session信息
        if($request->session()->has('id')){
            return $next($request);
        }else{
            //跳转到登录界面 redirect 跳转 /login 路由
            return redirect("/login");
        }
        
    }
}
