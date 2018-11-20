@extends("Home.HomePublic.homepublic")
@section('admin')
</div>
<head>
<meta charset="utf-8">

<meta name="copyright" content="深圳市华强北商城商务有限公司版权所有">
<meta name="keywords" content="网上购物,网上商城,家电网购,网购,手机,数码,相机,笔记本,电脑,家电,厨卫电器,车载,电玩,MP3/MP4,DV,上网本,华强北">
<meta name="description" content="华强北商城（okhqb.com）是专业的手机数码网上购物商城,华强北商城商标官方唯一授权使用单位,产品包括手机,数码,相机,笔记本,电脑,家电,车载用品,MP3/MP4,DV,上网本,电玩近万类,并且每天更新深圳华强北各类手机数码产品最新报价,承诺全场正品低价,及时发货,配送到家,华强北商城竭诚为你提供更优质的服务 ！">
<title>友情链接 - 华强北商城</title>
<link rel="shortcut icon" href="http://s.hqbcdn.com/favicon/favicon.ico"> 

<meta name="viewport" content="width=device-width,maximum-scale=2.0, user-scalable=yes">
<meta name="baidu-site-verification" content="1bSX0s8Nlx">
<meta property="wb:webmaster" content="ad8b28229f23a0f5">
<link rel="stylesheet" type="text/css" href="/static/homes/static/css/a25f04f627ef4ebcb2ffc41b5c37d27d.css">
<link rel="stylesheet" type="text/css" href="/static/homes/static/css/026ac3b11290473286cc9a9b31508abf.css">
<link rel="stylesheet" type="text/css" href="/static/homes/static/css/emoji_1.css">
<script type="text/javascript" async="" src="http:///static/homes/static.mediav.com/mv.js"></script><script type="text/javascript" async="" src="http://material.mediav.com/bjjs/mba.js"></script><script type="text/javascript" async="" src="http://a.okhqb.com/plus/ok.js?t=20140708"></script><script type="text/javascript" async="" src="http:///static/homes/static.mediav.com/mvl.js"></script><script type="text/javascript" async="" src="http:///static/homes/static.mediav.com/mvl.js"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script src="https://hm.baidu.com/hm.js?17af4b798d3fc0a6ef6f4ffc9cbd1e88"></script><script src="/static/homes/static/js/f9db3b32278e4ff288d5627c4c6dc135.js" type="text/javascript"></script><link rel="stylesheet" href="/static/homes/static/css/6e8e3021504b4a3ca499a46ae894827f.css">
<style>
    #hqb-navi-menu .m-cen {width:auto;}
</style>
<!--[if IE 6]>
<script src="/static/homes/static/js/dd_belatedpng_1.js"></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
</head>
<div class="friendlinks">
        <div class="f_column">
            <div class="f_column_l"></div>
            <div class="f_column_c">
                <ul>
                    <li><a href="../" >首页</a></li>
                    <li>友情链接</li>
                </ul>
            </div>
            <div class="f_column_r"></div>
        </div>

        <div class="f_links">
            <div class="f_links_title">友情链接</div>
            <div class="f_links_content">
            
            
                <ul>
                    @foreach($data as $row)
                    @if($row->status=='已通过')
                    <li><a href="http://www.vmall.com" title="华为官网" target="_blank">{{$row->name}}</a></li> 
                    @endif
                    @endforeach        
                </ul>
            
            </div>
            <div class="f_pager">
                <ul class="pager">
                    <li ></li>
                </ul>
            </div>
        </div>
    <form method="post" name="link" id="link" action="/link" onSubmit="return submit_app()">
        <div class="applylink">
            <div class="applylink_title">申请友情链接</div>
            <div class="applylink_content">
                <ul>
                    <li>网站名称：<input name="name" id="name" type="text"><span class="x1">*</span></li>
                    <li>网站地址：<input name="link_url" id="link_url" type="text"><span class="x1">*</span></li>
                   
                    <li>联系方式：<input name="tel" name="contact" id="contact" type="text"><span class="x1">*</span></li>
                    <li><span>网站介绍：</span><textarea name="descr" id="introduce" cols="" rows=""></textarea></li>
                   <!--  <li class="yanzheng1">
                    <span>验证码：</span><input name="u" type="text"  id="t1" class="yanzheng2"/>
                    <span id="discode"></span>
                    <input type="button" value="换一换" class="c" style="height:20px;"onClick="createCode()">

                    </li> -->
                    {{csrf_field()}}
                    <li class="anniu"><input  type="submit" value=""  /></li>
                </ul>

            </div>
            <div class="applylink_move">
                <ul>
                    <li><span>申请步骤：</span></li>
                    <li>1.请先在贵网站做好华强北商城的文字友情链接.<br>&nbsp;&nbsp;&nbsp;&nbsp;链接文字：华强北商城；链接地址：<a href="http://www.okhqb.com/" target="_blank" title="华强北商城">http://www.okhqb.com/</a></li>
                    <li>2.做好链接后，请在左侧填写申请信息。华强北商城只接受申请文字友<br>&nbsp;&nbsp;&nbsp;&nbsp;情链接</li>
                    <li>3.已经开通我站友情链接且内容健康，符合本站友情链接要求的网站.<br>&nbsp;&nbsp;&nbsp;&nbsp;经华强北商城管理员审核后，可以显示在此友情链接页面</li>
                    <li>4.PR值低于我站首页的网站将会被从首页移到此友情链接页面</li>
                    <li>5.<span  style="color: #FF6600;font-weight:bold;">(联系QQ：1198213524，注意：如从贵网站过来流量，贵网<br>&nbsp;&nbsp;站将排在当前栏目的第一位置)</span></li>
                </ul>
            </div>
        </div>
       
    </form>
    </div>
<script src="/static/homes/static/js/93e420be39604707b50c6f72a994737c.js" type="text/javascript"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?17af4b798d3fc0a6ef6f4ffc9cbd1e88";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script>
    function gao(p) {
        return (typeof(p)).toLowerCase() == "string" && p !== ""
    }
    function getGaCookie(r) {
        var q, p;
        if (gao(r)) {
            if ((p = String(document.cookie).match(new RegExp("(?:^| )" + r + "(?:(?:=([^;]*))|;|$)")))) {
                q = p[1] ? p[1] : ""
            }
        }
        return q
    }
    var gmemberid=0;
    var authstr = getGaCookie('auth');
    if (authstr) {
        authstr = eval("("+authstr+")");
        authstr = eval("("+authstr+")");
        gmemberid = authstr.member_id;
    }
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-30148206-1', 'okhqb.com');
    ga('set', 'UA-30148206-1',  {'userId': gmemberid });
    ga('send', 'pageview');
</script>

<script type="text/javascript">
    var _adwq = _adwq || [];
    _adwq.push(['_setAccount', 'jw99x']);
    _adwq.push(['_setDomainName', '.okhqb.com']);
    _adwq.push(['_trackPageview']);

    var _mvq = _mvq || [];
    _mvq.push(['$setAccount', 'm-354-1']);

    _mvq.push(['$logConversion']);
    (function() {
        var mvl = document.createElement('script');
        mvl.type = 'text/javascript'; mvl.async = true;
        mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(mvl, s);
    })();
    (function(){

        var Referer = document.referrer;
        var yiqifaCookie = $.cookie('yiqifa_cps_okhqb');
        var yqab = $.cookie('yqab');
        try{
            if(!yqab && Referer != '' && Referer.indexOf('okhqb.com') < 0 && yiqifaCookie ){
                $.cookie(
                    'yiqifa_cps_okhqb',
                    null,
                    {
                        path: '/',
                        domain: '.okhqb.com',
                        expires: -1
                    }
                );
            }
            $.cookie('yqab',null,{path: '/', domain: '.okhqb.com',expires: -1});
        }catch(e){}

    })();
</script>
<script type="text/javascript">
    // 360流量统计 -- 20160305
    var _mvq = _mvq || [];
    _mvq.push(['$setAccount', 'm-211723-0']);
    _mvq.push(['$logConversion']);
    (function() {
        var mvl = document.createElement('script');
        mvl.type = 'text/javascript'; mvl.async = true;
        mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(mvl, s);
    })();
</script>
<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="/static/homes/static/picture/cd8e5a2eb51e48d6a9a013e93130c449.gif"/></div></noscript>
<script  type="text/javascript">
    (function() {
        var s = document.createElement('script');
        var sparentNode =  document.getElementsByTagName('script')[0];
        s.type = 'text/javascript';
        s.async = 'true';
        s.src = 'http://a.okhqb.com/plus/ok.js?t=20140708';
        if(sparentNode)sparentNode.parentNode.insertBefore(s,sparentNode);
    })();
</script>
<!-- 工商网网监电子标识代码 20161008 -->
<!--<script type="text/javascript" src="static/js/iplookup.js"></script>-->

<script type="text/javascript" src="/static/homes/static/js/b158eef8f3e447cfbb6510858b9e743c.js"></script>
<script src="/static/homes/static/js/entrance_7.js" class="zhiCustomBtn" id="zhichiScript" data-args="属性名1=属性值1&属性名2=属性值2"></script>  


<script type="text/javascript">
            //验证验证码
            // function checkUrlData(id, num){
            //     var date = new Date();
            //     $('#'+id).parent().find('em').replaceWith('<em class="txtLoad">正在验证...</em>');
            //     $.getJSON("/member/check", {col : id, val : $('#'+id).val()},
            //       function(data){
            //         if(data.status==1){
            //             $('#'+id).parent().find('em').replaceWith('<em class="txtGre" id="yanzheng">&nbsp;</em>');
            //             //bls[num] = true;
            //         }
            //         else{
            //             $('#'+id).parent().find('em').replaceWith('<em class="txtRed" id="yanzheng">'+data.message+'</em>');
            //             //bls[num] = false;
            //         }

            //     });
            // }
            // $("#captcha").keyup(function(){
            //     if(this.value.length >= 4){
            //         checkUrlData('captcha', 4);
            //     }
            // })
            

//             var code; //在全局 定义验证码
// function createCode()
// { //创建验证码函数
//  code = "";
//  var codeLength =4;//验证码的长度
//  var selectChar = new Array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k',
//   'l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');//所有候选组成验证码的字符，当然也可以用中文的
//  for(var i=0;i<codeLength;i++)
//  { 
//  var charIndex =Math.floor(Math.random()*36);
//  code +=selectChar[charIndex]; 
//  }
// // 设置验证码的显示样式，并显示
//  document.getElementById("discode").style.fontFamily="Fixedsys"; //设置字体
//  document.getElementById("discode").style.letterSpacing="5px"; //字体间距
//  document.getElementById("discode").style.color="#0ab000"; //字体颜色
//  document.getElementById("discode").innerHTML=code; // 显示
// }
// function but()
// {//验证验证码输入是否正确
//  var val1=document.getElementById("t1").value;
//  var val2=code;
//  if(val1!=val2){
//   alert("验证码错误!");
//  document.getElementById('t1').value="";
//   }
//  }

            function submit_app()
            {
                if($.trim($("#name").val()) =="")
                {
                  alert("网站名称不能为空");
                  return false;
                }
                if($.trim($("#link_url").val()) =="")
                {
                  alert("网站地址不能为空");
                  return false;
                }
                if($.trim($("#contact").val()) =="")
                {
                  alert("联系方式不能为空");
                  return false;
                }
               //  if($.trim($("#u").val()) =="")
               //  {
               //    alert("验证码不能为空");
               //    return false;
               //  }
               //  alert($("yanzheng").className );
               //  return false;
               // if($("yanzheng").className !="txtGre")
               // {
               //     alert("验证码错误，不能提交申请");
               //   return false;
               // }
                var link_url = $("#link_url").val();
                if(link_url.substr(0,7).toLowerCase() != "http://")
                 {
                   $("#link_url").val("http://" + link_url);
                 }
                 //$("#link").submit();

            }


        </script>

        <script>
    $().ready(function(){
        $('#captcha_image').attr('src', '/captcha/default?s='+Math.random());
    });

</script>
@endsection
@section("title",'友情链接')
