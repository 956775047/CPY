<!DOCTYPE HTML>
<html>
<head>
    <script type="text/javascript" src="/static/admins/b/js/libs/jquery-1.8.3.min.js"></script>
	<meta http-equiv="Content-Type" content="; charset=" />
	<meta name="copyright" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    <meta name="viewport" content="width=device-width,maximum-scale=2.0, user-scalable=yes" />
	<link rel="shortcut icon" href="/favicon.ico" />
    <title>注册新会员 - 华强北商城</title>
    <link rel="stylesheet" href="/??assets/v4/css/en.base.css,assets/v4/css/en.public.css,
lib/dialog/skins/en.dialog.css?t=20141015" />        	<link rel="stylesheet" type="text/css" href="/static/homes/static/css/9f26c084697544c6a96b245ec2b34b4a.css" />
            <link rel="stylesheet" type="text/css" href="/static/homes/static/css/5eb8028c6463481b8f2c780dc4dbd7a8.css" />
        	<!--[if !IE]><!--><link rel="stylesheet" type="text/css" href="/static/homes/static/css/073f14b984fb48a5915a586118a093c2.css" /><!--<![endif]-->
        	<!--[if IE 9]> <link rel="stylesheet" type="text/css"  href="/static/homes/static/css/073f14b984fb48a5915a586118a093c2.css" /> <![endif]-->
        	<!--[if IE 10]> <link rel="stylesheet" type="text/css"  href="/static/homes/static/css/073f14b984fb48a5915a586118a093c2.css" /> <![endif]-->
			
            
            <link rel="stylesheet" type="text/css" href="/static/homes/static/css/852db310c8f2496386361c46b7a9cf3c.css"/>
            	
<style>
   .cur{
    border:1px solid red;
  }

  .curs{
    border:1px solid green;
  }
.mailbox dl,.mailbox dd,.mailbox dt {margin:0; padding:0;}
.mailbox {position:absolute; top:34px; left:0; z-index:200; width:320px; text-align:left; border:1px solid #ddd;
    background:#fff; display:none;}
.mailbox dl dt.mbsel {color:#f60; background:#f7f7f7;}
.mailbox dl dt {padding:0 4px; height:20px; line-height:20px; color:#7F9DB9; font-family:Verdana; font-size:12px; cursor:pointer; display:block; overflow:hidden; background:#fff;}
</style>	        	<script type="text/javascript" src="/static/homes/static/js/cfa1fdb1780d4e00baaf06bb5e1d1dee.js"></script>
				   <script type="text/javascript" src="/static/homes/static/js/10812866f87e4ecdb50d24d5659c81e6.js"></script>
                    <script type="text/javascript" src="/static/homes/static/js/36867a49552f490db233a6c9965546aa.js"></script>
        	<!--[if IE 6]>
	<script src="/static/homes/static/js/dd_belatedpng_3.js"></script>
	<script>DD_belatedPNG.fix('*');</script>
	<![endif]-->
</head>

<body>
    <!-- 简洁头部 -->
<div id="header" class="simple">
    <div class="wrap headerSimple cfix">
        <div class="header_logo">
            <h1 class="logo">
                <a href="http://www.okhqb.com">华强北商城</a>
            </h1>
            <span class="header_freight">全场运费5元，满59元包邮</span>
        </div>
    </div>
</div>
<!-- 简洁头部 End -->
    <div id="page">

    <div class="regWrap" style="overflow: hidden;">
        <div class="regTitleBg cfix">
            <!--<strong class="rTitle">个人用户注册</strong> -->
                        <div class="regTypeTab cfix">
                <div class="t_email hide">
                    <p>邮箱注册</p>
                </div>
                <div class="t_phone cur">
                    <p>手机注册</p>
                </div>
            </div>
        </div>
        <div class="tip_wrap cfix">
                    </div>
        <form method="post" action="/register" name="register" id="form" data-type="phone">
         <!--     @if(session('error'))
            {{session('error')}}
            @endif -->
                    <input type="hidden" autocomplete="off" value="N2FlNTVjNWZhMzk5NjE0MDNiM2ZhMWVhZDQ0NzI5Yjg=" id="mytoken" name="" />
            <input type="hidden" name="" value="" />
            <input name="" id=""   value="1" type="hidden" />
            <input type="hidden" name="" id="contextPath" value="http://login.okhqb.com" />
            <input type="hidden" name="" id="regType" value="1" />
            <input type="hidden" name="" value="" />
            <input type="hidden" name=""  value="" />
            <div class="w960">
                <div class="RtContent">
                    <ul style="display:none">
                        <li class="fontN">Email：</li>
                        <li class="input" style="position:relative; z-index:100;">

                            <input type="text" name="" id="email"  autocomplete="off"  class="reVerifiy first username" tips="请填写常用Email地址" maxlength="76" />
                            <em></em>
                            <div style="display:none;" class="mailbox">
                                <dl>
                                    <dt><span></span>@163.com</dt>
                                    <dt><span></span>@qq.com</dt>
                                    <dt><span></span>@126.com</dt>
                                    <dt><span></span>@sina.cn</dt>
                                    <dt><span></span>@gmail.com</dt>
                                    <dt><span></span>@sina.com</dt>
                                    <dt><span></span>@hotmail.com</dt>
                                    <dt><span></span>@yahoo.com.cn</dt>
                                    <dt><span></span>@sohu.com</dt>
                                    <dt><span></span>@yahoo.cn</dt>
                                </dl>
                            </div>
                        </li>
                    </ul>

                    <ul style="">
                        <li class="fontN">昵称：</li>

                        <li class="input">
                            <input type="text" maxlength="20" name="name" id="nickname" class="" tips="2-20个字符，推荐使用中文名，不包含特殊字符">
                            <em></em>
                        </li>
                    </ul>
                    <ul>
                        <li class="fontN">手机号码：</li>
                        <li class="input">
                            <input type="text" maxlength="11" name="phone" id="phone" class="" tips=""><span></span>
                            <em></em>

                        </li>
                    </ul>
                    <ul>
                        <li class="fontN" >手机验证码：</li>
                        <li class="input">
                            <input type="text" maxlength="6" name="code" id=""
                                   class="" tips="请输入接收到的手机验证" style="margin-right:100px">
                                   <span></span>
                            <em></em>
                            <div id="btn" class="getMoblieCaptcha disabled doit"><a href="javascript:void(0)">获取手机验证码</a></div>
                        </li>
                    </ul>
                    <ul>
                        <li class="fontN">登录密码：</li>
                        <li class="input">
                            <input type="password" maxlength="16" name="password" id="password" class="reVerifiy" tips="
">
                            <em></em>
                        </li>
                    </ul>
                    <ul>
                        <li class="fontN">确认密码：</li>

                        <li class="input">
                            <input type="password" maxlength="16" name="" id="confirm" class="reVerifiy" tips="请再次输入密码">
                            <em></em>
                        </li>
                    </ul>
                    {{csrf_field()}}
                    <ul class="yanzheng" style="display:none">
                        <li class="fontN">验证码：</li>
                        <li class="input">
                            <input type="text" maxlength="6" style="width:115px;" name="" id="captcha" class="reVerifiy">
                            <img id="captcha_img" style="cursor: pointer" onclick="changeCaptchaImage();" alt="看不清楚？点击刷新验证码"
                                 width="90" height="30">
              <span>
                  看不清？
                   <a href="javascript:;" onclick="changeCaptchaImage();">换一张</a>
              </span>
                            <em></em>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="cl"></div>
            <div class="w960">
                <div class="regist_submit">
                    <input type="hidden" class="txtGreNum" value="0" name="">
                    <input type="submit" id="register_submit" value="立即注册" class="ser">
                </div>

            </div>
            <div class="blank_20px"></div>
        </form>

        <div class="uni_login_box cfix">
                    <p class="uni_tt">已有账号，<a class="goto_sign" href="http://login.okhqb.com/member/login.html">直接登录&gt;&gt;</a></p>
                    <ul class="uni_list">
                        <li><a class="qq_l" href="http://login.okhqb.com/member/union/qq.html?forward=" target="_blank">使用QQ登录</a></li>
                        <li><a class="xl_l" href="http://login.okhqb.com/member/union/sina.html?forward=" target="_blank">使用新浪微博登录</a></li>
                        <li><a class="al_l" href="http://login.okhqb.com/member/union/alipay.html?forward=" target="_blank">使用支付宝登录</a></li>
                    </ul>
                </div>
    </div>

</div> 
<!-- <div style=";" id="scrollTop"><a href="javascript:;">&nbsp;</a></div><script type="text/javascript" src="/static/homes/static/js/fe688830b2a24bc5a82cebf4cd549f75.js"></script>
<div style="margin:0; text-align: center;height:14px;
 line-height:14px; color:#FFFFFF; font-size:12px;">canvas_12</div> -->

<script>
// alert($);
     // function doit(){
     //    //alert(1);
     //    a=$(this);
     //    //alert(a);
     //    pp=$("input[name='phone']").val();
     //   // alert(pp);
     //    $.get("/codeget",{pp:pp},function(data){
     //        alert(data);
     //        // if(data.code==000000){


     //        // }

     //    },'json');
     // }
     
</script>
</body>
<script>
     PHONE=false;
     CODE=false;
    //获取验证码
    $('.doit').click(function(){
        a=$(this);
        // alert(a.html);
        pp=$("input[name='phone']").val();
        // alert(pp);
        $.get('/code',{pp:pp},function(data){
             alert(data.code);
             // alert(data);
            if(data.code==000000){
                m=60;
                mytime=setInterval(function(){
                        m--;
                        a.html(m+"秒后重新发送");
                        a.attr("disabled",true);
                        if(m==0){
                            clearInterval(mytime);
                            a.html("重新发送");
                            a.attr("disabled",false);

                        }

                },1000);

            }
        },'json');
    });
    //输入验证码检测
    $("input[name='code']").blur(function(){
        i=$(this);
        code=$(this).val();
        $.get("/checkcode",{code:code},function(data){
            if(data==1){
              i.next("span").css("color",'green').html('校验码ok');
              i.addClass("curs");
              CODE=true;
            }else if(data==2){
               i.next("span").css("color",'red').html('校验码有误');
              i.addClass("cur");
              CODE=false;
            }else if(data==3){
               i.next("span").css("color",'red').html('输入校验码为空');
              i.addClass("cur");
              CODE=false;
            }else{
               i.next("span").css("color",'red').html('校验码过期');
              i.addClass("cur");
              CODE=false;
            }

        });

    });
    //手机号码验证
    $("input[name='phone']").blur(function(){
            o=$(this);
            p=$(this).val();
            $.get("/checkphone",{p:p},function(data){
               //  alert(data);
                if(data==1){
                o.next("span").css("color","red").html("手机号重复");
                o.addClass("cur");
                //把a标签禁用
                o.next("span").next('a').attr("disabled",true);
                PHONE=false;
              }else if(data==2){
                o.next("span").css("color","red").html("手机号空");
                o.addClass("cur");
                //把a标签禁用
                o.next("span").next('a').attr("disabled",true);
                PHONE=false;
              }else{
                o.next("span").css("color","green").html("手机号可用");
                o.addClass("curs");
                o.next("span").next('a').attr("disabled",false);
                PHONE=true;
              }
            });

    });
     //表单提交处理
     $("#form").submit(function(){
        //trigger 
        $("input").trigger("blur");
        if(PHONE && CODE){
          return true;//提交页面
        }else{
          return false;//阻止提交
        }
        
     });
</script>
</html>