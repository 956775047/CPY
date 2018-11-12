<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="; charset=" />
	<meta name="copyright" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    <meta name="viewport" content="width=device-width,maximum-scale=2.0, user-scalable=yes" />
	<link rel="shortcut icon" href="/favicon.ico" />
    <title>会员登录 - 华强北商城</title>
    <link rel="stylesheet" href="/??assets/v4/css/en.base.css,assets/v4/css/en.public.css,
lib/dialog/skins/en.dialog.css?t=20141015" />        	<link rel="stylesheet" type="text/css" href="/??assets/v3/css/en.login.css?t=20130924" />
        	<!--[if !IE]><!--><link rel="stylesheet" type="text/css" href="/??assets/v3/css/en.loginResponse.css?t=20131021" /><!--<![endif]-->
        	<!--[if IE 9]> <link rel="stylesheet" type="text/css"  href="/??assets/v3/css/en.loginResponse.css?t=20131021" /> <![endif]-->
        	<!--[if IE 10]> <link rel="stylesheet" type="text/css"  href="/??assets/v3/css/en.loginResponse.css?t=20131021" /> <![endif]-->
                	<script type="text/javascript" src="/??lib/jquery/jquery-1.7.2.min.js,lib/jquery/jquery.lazyload.js,lib/jquery/jquery.form.js,lib/jquery/jquery.cookie.js,lib/dialog/artDialog.js?t=20140423"></script>

                    <script type="text/javascript" src="/??assets/v2/script/analysis.js?t=20140429"></script>
                    <script type="text/javascript" src="/??assets/v4/script/en.login.auth.js,assets/v4/script/public.js?t=20140722"></script>
        	<!--[if IE 6]>
	<script src="http://s.hqbcdn.com/lib/jquery/DD_belatedPNG.js"></script>
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
    <div id="login" class="main">
    <div class="login_box fr">

        <!-- 登录区域 begin-->
        <div class="login_area">
            <h2>会员登录</h2>
				<div id="ajaxtip" class="ts_tr" style="display:none;"></div>
				<form method="post" name="loginform" action="" onSubmit="return jqready;">
                <ul class="m">
                    <li class="u">
                        <input type="text" maxlength="50" tabindex="1" class="usertext" name="userName"
                               value= "请输入您的昵称/邮箱/手机号"                                onblur="blurUserName(this)" onfocus="focusUserName(this)"
                               id="userName" />
                    </li>
                    <li class="m_b_14">
                        <input type="password" name="passWord" id="passWord" class="usertext" onblur="blurPassword
                        (this)" onfocus="focusPassword()" tabindex="2" >
                        <input id="password_text" type="text" value="请输入您的密码" onfocus="focusPasswordText()"
                        class="usertext" tabindex="2"/>
                    </li>


                    <li id="vimgtr" class="m_b_14" style="display:none">
                        <input type="text" maxlength="6" tabindex="3" style="width:70px;" class="usertext"
                               name="captcha" value="验证码" onBlur="blurCaptcha(this)" onfocus="focusCaptcha(this)" id="captcha">
                        <img width="70" height="30" onClick="javascript:showimg();" id="vimg" name="vimg" style="vertical-align:middle; margin-left:5px;" />
                        &nbsp;&nbsp;<a href="javascript:void(0);" onclick="showimg();">换一张</a>
                        <input type="hidden" value="0" name="errtimes" id="errtimes" />
                    </li>

                    <li class="f_login_s">
                        <input id="_auto_checkbox" type="checkbox" name="checkbox" />
                        <input id="_autoLogin" name="autoLogin" value="1" type="hidden" />自动登录
                    </li>



                    <li class="pad_l">
                        <a href="javascript:;" class="login_btn_bg">
							<input type="submit" class="login_btn" alt="会员登录" id="submit" disabled="disabled" tabindex="4" value="登录" />
						</a>
                        <a href="http://login.okhqb.com/member/memberForget.html">忘记密码了？</a>
                        <div class="cb"></div>
                    </li>
					
					<li class="go_reg_i">
                        <p style="color:#333">还不是强粉?<a href="javascript:gotoReg();">&nbsp;立即免费注册</a></p>
                    </li>
                </ul>
            </form>
            
            <div class="login_sns">
            	<a class="tencent" href="http://login.okhqb.com/member/union/qq.html?forward=http%253A%252F%252Fmy.okhqb.com%252Fmy%252Forder.html%253F%253Fbuild%252Fassets%252Fv4%252Fscript%252Fen.login.auth.min.js%253Ft%253D20150205">QQ登录</a>
                <a class="sinaWeibo" href="http://login.okhqb.com/member/union/sina.html?forward=http%253A%252F%252Fmy.okhqb.com%252Fmy%252Forder.html%253F%253Fbuild%252Fassets%252Fv4%252Fscript%252Fen.login.auth.min.js%253Ft%253D20150205">微博登录</a>
                <a class="alipay" href="http://login.okhqb.com/member/union/alipay.html?forward=http%253A%252F%252Fmy.okhqb.com%252Fmy%252Forder.html%253F%253Fbuild%252Fassets%252Fv4%252Fscript%252Fen.login.auth.min.js%253Ft%253D20150205">支付宝登录</a>
                <a class="wechat" href="http://login.okhqb.com/member/toWechatUnoinLogin.html?forward=http%253A%252F%252Fmy.okhqb.com%252Fmy%252Forder.html%253F%253Fbuild%252Fassets%252Fv4%252Fscript%252Fen.login.auth.min.js%253Ft%253D20150205">微信登录</a>
            </div>
			
        </div>
        
		</div>
		    <!--原登录图片：http://s.hqbcdn.com/assets/v3/images/login/login_express.pngg-->
        <div class="brand fl"><img src="/assets/v4/images/regLogin/login_express.jpg" alt="login" /></div>
		</div>
    <div class="simple-footer">
    <div class="simple-footer-wrap">
        <div class="copyright">
            Copyright &copy; 2010-2015 深圳市华强北在线商务有限公司 版权所有 <a target="_blank" href="http://www.miitbeian.gov.cn">粤ICP备12050212号-1</a>
            <a href="http://www.sznet110.gov.cn" rel="nofollow" target="_blank"><img alt="深圳网警" title="深圳网警" src="/assets/v3/images/newindex/foot_icon1_gb.jpg"></a>
            <a href="http://www.miitbeian.gov.cn" rel="nofollow" target="_blank"><img alt="经营许可证" title="增值电信业务经营许可证" src="/assets/v3/images/newindex/foot_icon2_gb.jpg"></a>
            <a href="http://www.ebs.gov.cn/EntCertificate.aspx?mainId=bc682492-860c-4d99-9130-b66ab75bcbf2" rel="nofollow" target="_blank"><img alt="市场监制主体身份认证" title="市场监制主体身份认证" src="/assets/v3/images/newindex/foot_icon3_gb.jpg"></a>
            <a target="_blank" rel="nofollow" href="http://www.szscjg.gov.cn/">
                <img src="/assets/v3/images/newindex/foot_icon4_gb.jpg" title="电子商务消费者服务站" alt="电子商务消费者服务站"></a>
            <a class="f_link" href="http://www.okhqb.com/link" target="_blank">友情链接</a>
            <a href="http://www.okhqb.com/sitemap.html" target="_blank" class="s_map">网站地图</a>关注我们：<a href="http://e.weibo.com/hqb360" target="_blank"><img src="/assets/v3/images/newindex/t_sina_gb.jpg" title="新浪微博" alt="新浪微博"></a>
            <a href="http://e.t.qq.com/okhqbokhqb" target="_blank">
                <img src="/assets/v3/images/newindex/t_qq_gb.jpg" title="腾讯微博" alt="腾讯微博"></a>
        </div>
    </div>
</div>
<div style="display:none;" id="scrollTop"><a href="javascript:;">&nbsp;</a></div><script type="text/javascript" src="/??build/assets/v4/script/en.login.auth.min.js?t=20150205"></script>
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
    var jqready=false;

    function showimg(){
        $("#vimgtr").show();
        $("#vimg").attr('src','/captcha/captchaImage.html?s='+Math.random());
        return false;
    }

    function showtip(tip,type){
        $(".ts_tr").css('background','url("/assets/v3/images/login/login.png") no-repeat scroll '+ ((type==true)?'0 -358px':'0 -292px'));
        $("#ajaxtiptr").css('display','');
        $(".ts_tr").show();
        $("#ajaxtip").html('<span>'+tip+'</span>');
    }

    function showsafetip(){
        $("#safetip").css('display', $("#lifetime").attr("checked")==true?'':'none'  );

    }
    function getQueryStringRegExp(name)
    {
        var reg = new RegExp("(^|\\?|&)"+ name +"=([^&]*)(\\s|&|$)", "i");
        if (reg.test(location.href)) return escape(RegExp.$2.replace(/\+/g, " ")); return "";
    }

    function gotoReg()
    {
        var regUrl='/member/register.html';
         window.location.href=regUrl;
    }

    function _setCookie(){
		try{
			if($.cookie('_userName')){
				var _cookieName = $.cookie('_userName');
				$('#userName').val(_cookieName);
			}else{
				return;
			}
		}catch( e ){}
    }
	
    _setCookie();

    $().ready(function(){
        jqready=true;
        $("#submit").attr("disabled",false);
        forward='';
        if(forward)(showtip('请先登录，才能继续操作！'));
        if(parseInt($("#errtimes").val())>=3)showimg();

        $('form[name=loginform]').submit(function(){
            if (this.userName.value == '' || this.userName.value == '请输入您的昵称/邮箱/手机号') {
                showtip('请输入您的昵称/邮箱/手机号');
                this.userName.focus();
                return false;
            }
            if (this.passWord.value == '') {
                showtip('密码不能为空');
                this.passWord.focus();
                return false;
            }

            if( parseInt($("#errtimes").val())>=3 &&  this.captcha.value.length<4){
                showtip('请输入右图中的验证码，不区分大小写');
                //showimg();
                this.captcha.focus();
                return false;
            }

            if($("#_auto_checkbox").attr('checked')=='checked') {
                $("#_autoLogin").val('0');
           }
           else{
                $("#_autoLogin").val('1');
           }

            showtip('正在登录，请稍后...',true);
            var forward='http%3A%2F%2Fmy.okhqb.com%2Fmy%2Forder.html%3F%3Fbuild%2Fassets%2Fv4%2Fscript%2Fen.login.auth.min.js%3Ft%3D20150205';
            $(this).ajaxSubmit({
                url:'/member/login.json?forward='+forward,
         　　   dataType: 'json',
                success: function(result) {
                    if (result.code!=200) {
                        showtip(result.msg);

                        $("#errtimes").val(parseInt($("#errtimes").val())+1);
                        if( parseInt($("#errtimes").val())>=3 ){showimg();}
                        return false;
                    } else {
                        var __uname = $('#userName').val();
                        $.cookie('_userName',__uname);
                        $("#ajaxtiptd").css('display','none');
                        window.location.href=result.data;
                        return false;
                    }
                }
            });
            return false;
        });
    });

    function blurPassword(temp)
    {
        //是否有输入密码
        if(isNull(temp.value))
        {
            $("#passWord").css('display','none');
            $("#password_text").css('display','inline-block');
        }else{
            $("#passWord").css('color','#999');
            $("#passWord").css('opacity','0.75');//不透明度
        }
        $("#passWord").removeClass('usertextFoucs');
        $("#password_text").removeClass('usertextFoucs');
    }

    function focusPassword()
    {
        $("#passWord").css('color','#666666');
        $("#passWord").css('opacity','1');
        $("#passWord").addClass('usertextFoucs');
    }


    function focusPasswordText()
    {
        $("#password_text").css('display','none');
        $("#passWord").css('display','inline-block');
        $("#passWord").focus();
    }

    function blurUserName(userName)
    {
        if(isNull(userName.value))
        {
            $("#userName").val('请输入您的昵称/邮箱/手机号');
        }
        $("#userName").removeClass('usertextFoucs');
    }

    function focusUserName(userName)
    {
        if(userName.value == '请输入您的昵称/邮箱/手机号')
        {
            $("#userName").val('');
        }
        $("#userName").addClass('usertextFoucs');
    }

    function blurCaptcha(captcha)
    {
        if(isNull(captcha.value))
        {
            $("#captcha").val('验证码');
        }
        $("#captcha").removeClass('usertextFoucs');
    }

    function focusCaptcha(captcha)
    {
        if(captcha.value == '验证码')
        {
            $("#captcha").val('');
        }
        $("#captcha").addClass('usertextFoucs');
    }
    //判断字符串是否为空
    function isNull(obj)
    {
        if(obj==null || obj.length==0)
            return true;
        else
            return false;
    }
	
	//判断是否为手机端浏览器
	var browser={    
		versions:function(){ 
			var ua = (window.navigator && navigator.userAgent) || "";
			return {                	
				isMobile: (/(iphone|ipod|((?:android)?.*?mobile)|blackberry|nokia)/i).test(ua)		
			};
		}()
	}

   if( browser.versions.isMobile ){
       $('.login_sns').hide();
   } 


</script>
<noscript>
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1000098639/?value=0&amp;label=LJ36CNGSggQQz5bx3AM&amp;guid=ON&amp;script=0"/></div>
</noscript></body>
</html>