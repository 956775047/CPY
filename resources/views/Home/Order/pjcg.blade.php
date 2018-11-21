<!DOCTYPE HTML>
<html>
<head>
    <link href="/static/homes/static/bootstrap/js/bootstrap.min.js"></link>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="copyright" content="深圳市华强北商城商务有限公司版权所有" />
    <meta property="qc:admins" content="14756677076730126375" />
    <title>我的评价 - 个人管理中心 - 华强北商城</title>
    <meta name="keywords" content="网上购物,网上商城,家电网购,网购,手机,数码,相机,笔记本,电脑,家电,厨卫电器,车载,电玩,MP3/MP4,DV,上网本,华强北" />
    <meta name="description" content="华强北商城(okhqb.com)是专业的手机数码网上购物商城,华强北在线商标官方唯一授权使用单位,产品包括手机,数码,相机,笔记本,电脑,家电,车载用品,MP3/MP4,DV,上网本,电玩近万类,并且每天更新深圳华强北各类手机数码产品最新报价,承诺全场正品低价,及时发货,配送到家,华强北在线竭诚为你提供更优质的服务 ！" />
    <meta name="viewport" content="width=device-width,maximum-scale=2.0, user-scalable=yes" />
    <meta name="baidu-site-verification" content="1bSX0s8Nlx" />
    <meta property="wb:webmaster" content="ad8b28229f23a0f5" />
    <link rel="shortcut icon" href="http://s.hqbcdn.com/favicon/favicon.ico" />
    <link rel="stylesheet" href="http://s2.hqbcdn.com/??assets/v4/css/base.css,assets/v4/css/public-new.css,lib/dialog/skins/dialog.css?t=20141015" />
            <link rel="stylesheet" type="text/css" href="http://s.hqbcdn.com/assets/v4/css/emoji.css?t=20140902" />
            <link rel="stylesheet" type="text/css" href="http://s.hqbcdn.com/??assets/v1/css/ucenter/index.css,assets/v3/css/member/member.css?t=20140807" />
            
            <link rel="stylesheet" type="text/css" href="http://s.hqbcdn.com/lib/My97DatePicker/skin/??default/datepicker.css,whyGreen/datepicker.css,WdatePicker.css?t=20121225" />
            <link rel="stylesheet" type="text/css" href="http://s.hqbcdn.com/??lib/dialog/skins/dialog.css?t=20121225" />
            <link rel="stylesheet" type="text/css" href="http://s.hqbcdn.com/??assets/v1/css/my/evaluate.css?t=20160721" />
                    <script type="text/javascript">
                    <!--
                    var assetsServer = "http://s.hqbcdn.com";
                    var myServer = "http://my.okhqb.com";
                    var wwwServer = "http://www.okhqb.com";
                    var canvasServer = "http://canvas.okhqb.com";
                    var mobileServer = "http://m.okhqb.com";
                    var loginServer = "http://login.okhqb.com";
                    var imServer = "http://im.okhqb.com";
                    var assets0Server = "http://s0.hqbcdn.com";
                    var assets1Server = "http://s1.hqbcdn.com";
                    var assets2Server = "http://s2.hqbcdn.com";
                    var xServer= "http://x.okhqb.com";
                    //-->
                    </script>
            <script type="text/javascript" src="http://s.hqbcdn.com/??lib/jquery/jquery-1.7.2.min.js,lib/jquery/jquery.lazyload.js?t=20140423"></script>
            <script type="text/javascript" src="http://s.hqbcdn.com/??lib/My97DatePicker/WdatePicker.js?t=20121225"></script>
            <script type="text/javascript" src="http://s.hqbcdn.com/??build/assets/v1/script/my/eval.manage.min.js?t=20160721"></script>
            <!--[if IE 6]>
    <script src="http://s.hqbcdn.com/lib/jquery/DD_belatedPNG.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
</head>

<body>
    <!-- toolbar 工具条 -->
<div id="toolbar-bg">
    <div class="toolbar">
        <div class="toolbar-left">
            @if(empty(session('name')))
                <p class="unlogin dc-unlogin"><a href="/login" rel="nofollow" class="nav-bold">您好!&nbsp;请登录</a>&nbsp;<i>|</i>&nbsp;<a href="/register" rel="nofollow" class="nav-bold" style="color: #686868">注册</a></p>
            @else
               <!--  <p class="logined dc-logined">
                您好&nbsp;,{{session('name')}}<a href="http://my.okhqb.com/my/home.html" rel="nofollow" class="nav-bold dc-nav-user" target="_blank">&nbsp;</a>&nbsp;,欢迎来到华强北商城！|&nbsp;
                <a href="http://www.okhqb.com/member/logout.html" rel="nofollow">退出</a>
                </p> -->
                <p class="unlogin dc-unlogin"><a href="" rel="nofollow" class="nav-bold">您好!&nbsp;{{session('name')}}</a>&nbsp;<i>|</i>&nbsp;<a href="/outlogin" rel="nofollow" class="nav-bold" style="color: #686868">退出</a></p>
            @endif
        </div>
        <div class="toolbar-right">
            <ul class="toolbar-right-list">
                <li ><a href="http://my.okhqb.com/my/home.html?utml=member" target="_blank">我的账户</a><i class="list-icon-new"></i>
                    <div class="toolbar-my toolbar-right-box" >
                        <a href="/order" target="">我的订单</a>
                        <a href="" target="_blank">我的小强币</a>
                        <a href="" target="_blank">我的关注</a>
                        <a href="http://my.okhqb.com/my/coupons.html?utml=coupons" target="_blank">我的优惠券</a>
                    </div>
                </li>
                <li class="nav-msg dc-nav-msg ">
                    <a href="http://my.okhqb.com/my/xiaoxi.html" target="_blank">我的消息 <span class="nav-message">0</span></a> <i class="list-icon-new"></i>
                    <div class=" toolbar-right-box toolbar-sub">
                        <div class="msg-list-box" style="display: block"><p style="margin-bottom:10px;line-heihgt:50px;text-align:center;left:0px;">暂无消息</p></div>
                    </div>
                </li>
                <li>
                    <a href="http://www.okhqb.com/help/index/1_70.html?utml=help" target="_blank">客户服务</a><i class="list-icon-new"></i>
                    <div class="toolbar-service toolbar-right-box">
                        <a class="toolbar-tel" href="javascript:void(0);">客服热线：0755-88698888</a>
                        
<div class="kffw" style="width: 160px"><a class="service1" href="https://www.sobot.com/chat/pc/index.html?sysNum=f21c5dd2ebe04583a93a6b2b297e69da" target="_blank">在线客服</a>
                        <a href="http://www.okhqb.com/help/index/1000000066_1000000136.html?utml=souhou;" class="okhqb-phone">售后服务</a>
                        <a href="javascript:void(0);" class="okhqb_feed">意见反馈</a></div>
                    </div>
                </li>
                <li>
                    <a href="javascript:void(0);" target="_blank">关注我们</a><i class="list-icon-new"></i>
                    <div class=" toolbar-right-box toolbar-focus">
                        <a class="wx" href="javascript:void(0)">官方微信</a>
                        <a class="wb" href="http://weibo.com/hqb360" target="_blank"></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
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

<script type="text/javascript">
    $(document).ready(function(){

        var _mytoken = $('#mytoken').val() || '';
        $.ajax({
            type: "get",
            url : 'http://my.okhqb.com/my/getMemberInfoInIndex.json',
            data: {'_hqb_token':_mytoken},
            dataType : "jsonp",
            jsonp: 'callback',
            success: function(d){
                if(d.code == 200){
                    $('#current_member_nickanme').html(d.data.nickname);

                    var openInnerTest=d.data.openInnerTest;
                    var totalPoint=d.data.point;
                    if(totalPoint<0){
                        totalPoint=0;
                    }
                    if(openInnerTest){
                        var innerTestMember=d.data.innerTestMember;
                        if(innerTestMember){
                            $("#point_msg").html('<em id="current_member_point">'+totalPoint+'</em>') ;
                        }
                    }else{
                        $("#point_msg").html('<em id="current_member_point">'+totalPoint+'</em>')
                    }
                    if(d.data.avatar!=""){
                        $('#current_member_avatar').attr("src",'http://img1.hqbcdn.com/images/memberpic/'+d.data.avatar);
                    }else{
                        $('#current_member_avatar').attr("src",
                            'http://s1.hqbcdn.com/assets/v3/images/member/member_head.jpg');
                    }



                }else{
                }
                var _newtoken = d.formToken || '';
            }
        });
        $('.member_center_dt').hover(function(){
            $(this).removeClass('icon5').addClass('icon6');
        },function(){
            $(this).removeClass('icon6').addClass('icon5');
        });
    });


</script>

    <!-- location -->
<div style="width:980px; margin: 0 auto;">
    <div class="sec-crumb" style="border: none;">
        <ul class="sec-tab cfix">
            <li class="now-addr">现在的位置：</li>
            <li><a href="">账号管理</a><span class="gt">&gt;</span></li>
            <li><a href="/order">我的订单</a><span class="gt">&gt;</span></li>
            <li><a href="">订单详情</a><span class="gt">&gt;</span></li>
            <li class="selected"><span><a>商品评价</a></span></li>
        </ul>
    </div>
</div>

<div class="eval_box">
    <div class="eval_l">
        <span class="_arrow tno" id="top_arr"></span>
        <div class="eval_gbox">
            @foreach($data as $row)
            <div class="eval_slide">
            <ul class="eval_goods">
                                         <li  class="evaled"   id="0">
                  <img src="{{$row->pic}}" />
                  <input type="hidden" id="orderId" name="orderId" value="1001288044">
                  <input type="hidden" id="title" name="title" value="{{$row->name}}">
                  <input type="hidden" id="propsStr" name="propsStr" value="{{$row->descr}}">
                                       <p class="status"></p></li>
                                                     </ul>
            </div>
            @endforeach
            <span class="eval_point"></span>
        </div>
        <span class="_arrow bno" id="bot_arr"></span>
    </div>

    <div class="eval_r">
        <div class="goods_titlebox">
            <h1 class="goods_title"></h1>
            <span class="goods_sku"></span>
        </div>
         <div class="eval_tips">
            <h2>参考评价</h2>
            <ul>
                <li>&nbsp;&nbsp; 外观设计精美<br>
                    &nbsp;&nbsp; 材质高用料好<br>
                    &nbsp;&nbsp; 超酷的使用感觉<br>
                    &nbsp;&nbsp; 愉快的购物体验<br>
                    &nbsp;&nbsp; 性价比首选<br>
                </li>

            </ul>
        </div>
                        <input type="hidden" autocomplete="off" value="OGIwMzIxYTBmYWU1ODEyNGVlYjJiNDU5MTEzZWY5MmM=" id="_hqb_token" name="_hqb_token" />
                        <div>
            <h3 class="fl"><img src="http://s.hqbcdn.com/assets/v1/images/my/evaluate/eval_10.jpg"></h3>
            

            <span class="eval_icon"><img src="http://s.hqbcdn.com/assets/v1/images/my/evaluate/eval_17.jpg"></span>
                <span class="cont_lbg">
                    <span class="cont_box">愉快的购物体验</span>
                </span>
            <div style="clear:both;"></div>
            <span class="c_time"></span>
        </div>

    </div>

</div> 
   <div class="simple-footer">
    <div class="simple-footer-wrap">
        <div class="copyright">
            Copyright &copy; 2010-2015 深圳市华强北在线商务有限公司 版权所有 <a target="_blank" href="http://www.miitbeian.gov.cn">粤ICP备12050212号-1</a>
            <a href="http://www.sznet110.gov.cn" rel="nofollow" target="_blank"><img alt="深圳网警" title="深圳网警" src="http://s.hqbcdn.com/assets/v3/images/newindex/foot_icon1_gb.jpg"></a>
            <a href="http://www.miitbeian.gov.cn" rel="nofollow" target="_blank"><img alt="经营许可证" title="增值电信业务经营许可证" src="http://s.hqbcdn.com/assets/v3/images/newindex/foot_icon2_gb.jpg"></a>
            <a href="http://www.ebs.gov.cn/EntCertificate.aspx?mainId=bc682492-860c-4d99-9130-b66ab75bcbf2" rel="nofollow" target="_blank"><img alt="市场监制主体身份认证" title="市场监制主体身份认证" src="http://s.hqbcdn.com//assets/v3/images/newindex/foot_icon3_gb.jpg"></a>
            <a target="_blank" rel="nofollow" href="http://www.szscjg.gov.cn/">
                <img src="http://s.hqbcdn.com/assets/v3/images/newindex/foot_icon4_gb.jpg" title="电子商务消费者服务站" alt="电子商务消费者服务站"></a>
            <a class="f_link" href="http://www.okhqb.com/link" target="_blank">友情链接</a>
            <a href="http://www.okhqb.com/sitemap.html" target="_blank" class="s_map">网站地图</a>关注我们：<a href="http://e.weibo.com/hqb360" target="_blank"><img src="http://s.hqbcdn.com/assets/v3/images/newindex/t_sina_gb.jpg" title="新浪微博" alt="新浪微博"></a>
            <a href="http://e.t.qq.com/okhqbokhqb" target="_blank">
                <img src="http://s.hqbcdn.com/assets/v3/images/newindex/t_qq_gb.jpg" title="腾讯微博" alt="腾讯微博"></a>
        </div>
    </div>
</div>

<div style="display:none;" id="scrollTop"><a href="javascript:;">&nbsp;</a></div>

<noscript>
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1000098639/?value=0&amp;label=LJ36CNGSggQQz5bx3AM&amp;guid=ON&amp;script=0"/></div>
</noscript></body>   
</html>