<?php

namespace App\Http\Middleware;

use Closure;

class AdminLoginMiddleware
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
        if($request->session()->has('name')){
             $actions=explode('\\', \Route::current()->getActionName());
            //或$actions=explode('\\', \Route::currentRouteAction());
            $modelName=$actions[count($actions)-2]=='Controllers'?null:$actions[count($actions)-2];
            $func=explode('@', $actions[count($actions)-1]);
            //控制器名
            $controllerName=$func[0];
            //方法
            $actionName=$func[1];
             // echo $controllerName.":".$actionName;exit;
            //4.权限对比
            //获取登录用户的权限信息
            $nodelist=session('nodelist');
            // if(empty($nodelist[$controllerName]) || !in_array($actionName,$nodelist[$controllerName])){
            //     return redirect("/admins")->with('error','抱歉,您没有权限访问该模块');
            // }
            return $next($request);
        }else{
            return redirect("/adminlogin/create");
        }
        
    }
}
 