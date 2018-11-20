@extends("Home.HomePublic.homepublic")
@section("admin")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
         <title>二手靓机 品质无忧</title>
    <meta name="keywords" content="二手靓机 品质无忧"/>
    
    <link rel="shortcut icon" href="http://s.hqbcdn.com/favicon/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="/static/homes/static/css/68eebf3064624aeaaccd1ef6aa0ad796.css"/>
    <link rel="stylesheet" href="/static/homes/static/css/index.v1_1.css"/>
    <script type="text/javascript" src="/static/homes/static/js/0c5ae3446a83460db25eb9771b471583.js"></script>
    <script type="text/javascript" src="/static/homes/static/js/3ccd3e0fb97e42afb51d4fa027c3da1f.js"></script>
<style>
.es .ban .ban-6 {
    height: 127px;
    background: url(/static/homes/static/images/pc_1.jpg) no-repeat center center;
}
</style>
</head>
<body>




<!-- 搜索栏 -->

<div class="es">
    <div class="ban">
        <div class="ban-1"></div>
        <div class="ban-2"></div>
        <div class="ban-3"></div>
        <div class="ban-4"></div>
        <div class="ban-5"></div>
        <div class="ban-6"></div>
        <div class="ban-7"></div>
        <div class="ban-8"></div>
    </div>
    <div class="sec1">
        <div class="tit"></div>

        <div class="w-1000">
            <ul class="ad"> 
                @foreach($data1 as $row)
                            <li><a href="" target="_blank"><img src="{{$row->pic}}" width="1000" height="300" alt=""></a></li>
                           @endforeach
                            
                        </ul>
        </div>
       

    </div>
    <div class="sec2">
        <div class="tit"></div>
        <div class="w-1000">
            <ul class="goods">
                 
                  @foreach($data as $row)
                      <li>
                    <div class="item-img">
                        <a href="http://www.okhqb.com/item/1000126045.html?utml=youpin" target="_blank">
                            <img src="{{$row->pic}}" width="200" height="200">
                        </a>
                    </div>
                    <div class="big-txt">
                        <a href="http://www.okhqb.com/item/1000126045.html?utml=youpin" target="_blank" class="ad-item-t1">{{$row->name}}</a>
                        <a href="http://www.okhqb.com/item/1000126045.html?utml=youpin" target="_blank" class="ad-item-t2">{{$row->descr}}</a>
                        <p>&yen;<strong>{{$row->price}}</strong></p>
                        <a href="http://www.okhqb.com/item/1000126045.html?utml=youpin" target="" class="btn-buy">立即购买</a>
                    </div>
                </li>
                @endforeach      
                           
                           
                            
                            
                        </ul>
        </div>
    </div>
    <div class="sec3">
        <div class="w-110">
            <a href="#"><img src="/static/homes/static/picture/top_1.jpg" width="110" height="100"></a>
        </div>
    </div>
</div>
<!--最新改版(20160819)-->

<!--最新改版(20160819)-->

<!-- 反馈弹出框 -->
<div class="feedback cfix">
    <div class="help_offer_1 cfix">
        <textarea name="inquiry_remark" cols="" rows="" id="inquiry_remark" style="color: rgb(204, 204, 204);">请输入您对我们网站有什么意见或建议，您的反馈将帮助我们更好的为您服务！</textarea>
        <input type="text" style="color: rgb(204, 204, 204);" name="inquiry_email" id="inquiry_email" value="请您填写您的邮箱" class="w_e_mail" placeholder="请您填写您的邮箱">
        <input class="help_tijiao" id="u_inquiry_submit" name="" value="">
    </div>
</div>
<!-- 反馈弹出框 end -->
<script src="/static/homes/static/js/8630743d29be410b8cb753232e28670b.js" type="text/javascript"></script>
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
<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="/static/homes/static/picture/c959f376be174291951177d4e5a380c9.gif"/></div></noscript>
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

<script type="text/javascript" src="/static/homes/static/js/8377f61d33d24ea2979d23649df1c484.js"></script>
<script src="/static/homes/static/js/entrance_1.js" class="zhiCustomBtn" id="zhichiScript" data-args="属性名1=属性值1&属性名2=属性值2"></script></body>
</html>
@endsection
@section("title","二手页")