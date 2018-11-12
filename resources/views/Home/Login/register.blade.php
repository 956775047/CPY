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
    <!--
.mailbox dl,.mailbox dd,.mailbox dt {margin:0; padding:0;}
.mailbox {position:absolute; top:34px; left:0; z-index:200; width:320px; text-align:left; border:1px solid #ddd;
    background:#fff; display:none;}
.mailbox dl dt.mbsel {color:#f60; background:#f7f7f7;}
.mailbox dl dt {padding:0 4px; height:20px; line-height:20px; color:#7F9DB9; font-family:Verdana; font-size:12px; cursor:pointer; display:block; overflow:hidden; background:#fff;}
-->
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



        <form method="post" action="/register" name="register" id="ff" data-type="phone">
            
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
                    <ul>
                        <li class="fontN">手机号码：</li>
                        <li class="input">
                            <input type="text" maxlength="11" name="phone" id="mobile" class="reVerifiy" tips="请输入正确的手机号并验证">
                            <em></em>

                        </li>
                    </ul>
                    <!-- <ul class="yanzheng">
                        <li class="fontN">验证码：</li>
                        <li class="input">
                            <input type="text" maxlength="6" style="width:115px;"  id="mcaptcha"  class="reVerifiy">
                            <img id="m_captcha_img" style="cursor: pointer" onclick="changeMobileCaptchaImage();" alt="看不清楚？点击刷新验证码"
                                 src="/static/homes/static/picture/captchaimage.html" width="90" height="30">
                          <span>
                              看不清？
                               <a href="javascript:;" onclick="changeMobileCaptchaImage();">换一张</a>
                          </span>
                            <em></em>
                        </li>
                    </ul> -->

                    <ul>
                        <li class="fontN" >手机验证码：</li>
                        <li class="input">
                            <input type="text" maxlength="6" name="phone" id=""
                                   class="reVerifiy" tips="请输入接收到的手机验证" style="margin-right:100px"><span id="cc"></span>
                            <em></em>
                            <div id="btn" class="getMoblieCaptcha disabled">获取手机验证码</div>
                        </li>
                    </ul>
                    <ul style="display:block">
                        <li class="fontN">昵称：</li>

                        <li class="input">
                            <input type="text" maxlength="20" name="name" id="nickname" class="reVerifiy" tips="2-20个字符，推荐使用中文名，不包含特殊字符">
                            <em></em>
                        </li>
                    </ul>
                    <ul>
                        <li class="fontN">登录密码：</li>
                        <li class="input">
                            <input type="password" maxlength="16" name="password" id="password" class="reVerifiy" tips="6-16位字符，推荐使用数字、字母和符号的组合密码
">
                            <em></em>
                        </li>
                    </ul>
                    <ul>
                        <li class="fontN">确认密码：</li>

                        <li class="input">
                            <input type="password" maxlength="16" name="confirm" id="confirm" class="reVerifiy" tips="请再次输入密码">
                            <em></em>
                        </li>
                    </ul>
                    
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
            <div class="w960 cfix">
                <div class="server_agreement">
                    <input id="hqb_protocol" type="checkbox" name="" checked />
                    我已阅读并同意<a href="javascript:;" >《华强北商城服务协议》</a> </div>
            </div>
            <div class="w960">
                <div class="regist_submit">
                    <input type="hidden" class="txtGreNum" value="0" name="">
                    <input type="submit" id="register_submit" value="立即注册" class="ser">
                    {{csrf_field()}}
                </div>
                <div id="registBot" style="display: none;" >
                    <div class="registBot_wrap" style="height:200px; width:400px; overflow:scroll; overflow-x:hidden; border:1px solid #bdbdbd; padding:20px 28px">
                        <div class="infor" style="padding-bottom:20px">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本服务协议双方分别为深圳市华强北在线商务有限公司（简称"华强北商城"）与华强北商城网民，本服务协议具有合同效力。本服务协议内容包括协议正文及所有华强北商城已经发布的或将来可能发布的各类规则。所有规则为协议不可分割的一部分，与协议正文具有同等法律效力。 <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在本服务协议中没有以"规则"字样表示的链接文字所指示的文件不属于本服务协议的组成部分，而是其它内容的协议或有关参考数据，与本协议没有法律上的直接关系。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户在使用华强北商城提供的各项服务的同时，承诺接受并遵守各项相关规则的规定。华强北商城有权根据需要不时地制定、修改本协议或各类规则，如本协议有任何变更，华强北商城将在网站上刊载公告，通知予用户。如用户不同意相关变更，必须停止使用"服务"。经修订的协议一经在华强北商城网公布后，立即自动生效。各类规则会在发布后生效，亦成为本协议的一部分。登录或继续使用"服务"将表示用户接受经修订的协议。除另行明确声明外，任何使"服务"范围扩大或功能增强的新内容均受本协议约束。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户确认本服务协议后，本服务协议即在用户和华强北商城之间产生法律效力。请用户务必在注册之前认真阅读全部服务协议内容，如有任何疑问，可向华强北商城咨询。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1)无论用户事实上是否在注册之前认真阅读了本服务协议，只要用户点击协议正本上方的"同意以下协议并注册"按钮成功注册为用户，用户的行为则表示其同意并签署了本服务协议。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2)本协议不涉及用户与华强北商城其它用户之间因网上交易而产生的法律关系及法律纠纷。
                        </div>
                    </div>
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

</div>    <div class="simple-footer">
    <div class="simple-footer-wrap">
        <div class="copyright">
            Copyright &copy; 2010-2015 深圳市华强北在线商务有限公司 版权所有 <a target="_blank" href="http://www.miitbeian.gov.cn">粤ICP备12050212号-1</a>
            <a href="http://www.sznet110.gov.cn" rel="nofollow" target="_blank"><img alt="深圳网警" title="深圳网警" src="/static/homes/static/picture/foot_icon1_gb_4.jpg"></a>
            <a href="http://www.miitbeian.gov.cn" rel="nofollow" target="_blank"><img alt="经营许可证" title="增值电信业务经营许可证" src="/static/homes/static/picture/foot_icon2_gb_4.jpg"></a>
            <a href="http://www.ebs.gov.cn/EntCertificate.aspx?mainId=bc682492-860c-4d99-9130-b66ab75bcbf2" rel="nofollow" target="_blank"><img alt="市场监制主体身份认证" title="市场监制主体身份认证" src="/static/homes/static/picture/foot_icon3_gb_4.jpg"></a>
            <a target="_blank" rel="nofollow" href="http://www.szscjg.gov.cn/">
                <img src="/static/homes/static/picture/foot_icon4_gb_4.jpg" title="电子商务消费者服务站" alt="电子商务消费者服务站"></a>
            <a class="f_link" href="http://www.okhqb.com/link" target="_blank">友情链接</a>
            <a href="http://www.okhqb.com/sitemap.html" target="_blank" class="s_map">网站地图</a>关注我们：<a href="http://e.weibo.com/hqb360" target="_blank"><img src="/static/homes/static/picture/t_sina_gb_4.jpg" title="新浪微博" alt="新浪微博"></a>
            <a href="http://e.t.qq.com/okhqbokhqb" target="_blank">
                <img src="/static/homes/static/picture/t_qq_gb_4.jpg" title="腾讯微博" alt="腾讯微博"></a>
        </div>
    </div>
</div>
<div style="display:none;" id="scrollTop"><a href="javascript:;">&nbsp;</a></div><script type="text/javascript" src="/static/homes/static/js/fe688830b2a24bc5a82cebf4cd549f75.js"></script>
<div style="margin:0; text-align: center;height:14px;
 line-height:14px; color:#FFFFFF; font-size:12px;">canvas_12</div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-30148206-1', 'okhqb.com');
    ga('set', 'UA-30148206-1',  {'userId': ''});
    ga('send', 'pageview');
</script>


	<script type="text/javascript">
$(function(){
    $('#captcha_image').attr('src','/captcha/captchaImage.html?s='+Math.random());
});

function changeCaptchaImage(){
    $('#captcha_img').attr('src','/captcha/captchaImage.html?s='+Math.random());
    $('#captcha').val('');
}

function changeMobileCaptchaImage(){
    $('#m_captcha_img').attr('src','/captcha/captchaImage.html?s='+Math.random());
    $('#mcaptcha').val('');
    }
</script>
<noscript>
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="/static/homes/static/picture/f90b06b5143143409637836ac1e0f706.gif"/></div>
</noscript></body>
<!-- <script>
    //alert($);
    //获取按钮
    $('#btn').click(function(){
        o=$(this);
        phone=$("input[name='phone']").val();
       // alert(phone);
       $.get("/reg",{phone:phone},function($data){
        //alert($data.code);
        if(data.code==000000){
                m=60;
                mytime=setInterval(function(){
                    m--;
                    o.html(m+"秒后重新发送");
                    o.attr('disabled',true);
                    if(m==0){
                        clearInterval(mytime);
                        o.html("重新发送");
                        o.attr("disabled",false);

                    }

                }，1000)；      

        }
       },'json');

    });
    flag=false;
    //对比验证码
    $("input[name='phone']").blur(function(){
        code=$(this).val();
        oo=$(this);
       // alert(code);
       //触发ajax
       $.get("/code",{code:code},function(data){
           // alert(data);
           if(data==1){
                oo.next('span').css('color','green').html('验证码一致');
                flag=true;

           }else if(data==2){
                oo.next('span').css('color','red').html('验证码不一致');
                flag=false;

           }else if(data==3){
                oo.next('span').css('color','red').html('验证码为空');
                flag=false;

           }else{
                oo.next('span').css('color','red').html('验证码过期');
                flag=false;

           }
       });

    });
    //表单提交
    $("#ff").submit(function(){
            return flag;
            让name为code的input 失去焦点
            $("input[name='code']").trigger("blur");
    });
</script> -->
</html>