<!DOCTYPE html>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta name="copyright" content="深圳市华强北商城商务有限公司版权所有" /> 
  <meta name="keywords" content="网上购物,网上商城,家电网购,网购,手机,数码,相机,笔记本,电脑,家电,厨卫电器,车载,电玩,MP3/MP4,DV,上网本,华强北" /> 
  <meta name="description" content="华强北商城(okhqb.com)是专业的手机数码网上购物商城,华强北在线商标官方唯一授权使用单位,产品包括手机,数码,相机,笔记本,电脑,家电,车载用品,MP3/MP4,DV,上网本,电玩近万类,并且每天更新深圳华强北各类手机数码产品最新报价,承诺全场正品低价,及时发货,配送到家,华强北在线竭诚为你提供更优质的服务 ！" /> 
  <meta name="viewport" content="width=device-width,maximum-scale=2.0, user-scalable=yes" /> 
  <link rel="shortcut icon" href="http://s.hqbcdn.com/favicon/favicon.ico" /> 
  <title>购物车-华强北商城</title> 
  <link rel="stylesheet" href="http://s2.hqbcdn.com/??assets/v4/css/base.css,assets/v4/css/public-new.css,lib/dialog/skins/dialog.css?t=20141015" /> 
  <link rel="stylesheet" type="text/css" href="http://s.hqbcdn.com/assets/v4/css/emoji.css?t=20140902" /> 
  <link rel="stylesheet" href="http://s.hqbcdn.com/??assets/v4/css/base.css,lib/dialog/skins/dialog.css?t=20150115" /> 
  <link rel="stylesheet" type="text/css" href="http://s.hqbcdn.com/assets/v4/css/??public-new.css,emoji.css,process/tradeCart-1.0.0.css?t=20150115" /> 
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
  <!--[if IE 6]>
  <script src="http://s.hqbcdn.com/lib/jquery/DD_belatedPNG.js"></script>
  <script>DD_belatedPNG.fix('*');</script>
  <![endif]--> 
 </head> 
 <body> 
  <!--S toolbar 工具条 --> 
  <div id="toolbar_bg"> 
   <div class="toolbar"> 
    <div class="tool_list pro-tool"> 
     <a class="switchtoMobile J-app-down" href="http://stopic.okhqb.com/mobile.html" target="_blank"><em></em>手机版</a> 
     <span class="pro-tool-status"> 华强北商城欢迎您： <a href="javascript:void(0);" class="pro-login tool-bold-red">登录</a> <a href="javascript:void(0);" class="pro-login tool-bold-red">快速注册</a> </span> &nbsp;&nbsp;&nbsp;| 
     <span class="kf_phone">客服电话：0755-88698888&nbsp;|&nbsp; 服务时间<span style="font-size:9px">&nbsp;▼&nbsp;</span></span> 
    </div> 
   </div> 
  </div> 
  <!--E toolbar 工具条 --> 
  <!-- 简洁头部 --> 
  <div id="header" class="simple"> 
   <div class="wrap headerSimple cfix"> 
    <div class="header_logo"> 
     <h1 class="logo"> <a href="http://www.okhqb.com" target="_blank">华强北商城</a> </h1> 
     <span class="header_freight">全场运费5元，满59元包邮</span> 
    </div> 
    <div class="header_ad"></div> 
   </div> 
  </div> 
  <!-- 简洁头部 End --> 
  <input type="hidden" id="isWsale" value="0" /> 
  <div id="cart-wrapper"> 
   <!--S 顶部banner --> 
   <div class="cart-box cart-banner"> 
    <div class="cart-top-nav"> 
     <span class="car-top-nav01 cart-top-on">加入购物车</span> 
     <span class="car-top-nav02">确认订单信息</span> 
     <span class="car-top-nav03">成功提交订单</span> 
    </div> 
   </div> 
   <!--S 主要列表内容 --> 
   <div class="cart-box cart-main"> 
    <div class="cart-time">
     <i class="cart-time-icon"> </i>
     <span>商品库存有限，请在<i>0分0秒</i>内提交订单</span> 
    </div> 
    <input type="hidden" id="cart-times" value="2985" /> 
    <form method="POST" action="http://buy.okhqb.com/buy/order.html" id="__cartForm"> 
     <input id="_freeFreight" type="hidden" value="79" /> 
     <input id="_freightFee" type="hidden" value="6" /> 
     <input id="_memberId" type="hidden" value="" /> 
     <table class="cart-list-nav"> 
      <tbody>
       <tr class="first-tr"> 
        <th class="title-goods">商品</th> 
        <th class="title-price">单价</th> 
        <th class="title-counts">数量</th> 
        <th class="title-total">小计</th> 
        <th class="title-action">操作</th> 
       </tr> 
      </tbody>
     </table> 
     <table class="cart-list"> 
      <colgroup class="title-goods"></colgroup>
      <colgroup class="title-price"></colgroup>
      <colgroup class="title-counts"></colgroup>
      <colgroup class="title-total"></colgroup>
      <colgroup class="title-action"> 
      </colgroup>
      <tbody>
        @foreach($res as $da)

       <tr> 
        <td> 
         <div class="td-select"> 
          <input class="check_goods" type="checkbox" checked="checked" value="1003746601" name="cartId" style="cursor: pointer;" /> 
         </div> 
         <div class="td-pic"> 
          <a target="_blank" href="http://www.okhqb.com/item/1000126883.html"> <img class="thumb" width="60" height="60" title="" src="{{$da['pic']}}" /> </a> 
         </div> 
         <div class="td-info"> 
          <p><a href="http://www.okhqb.com/item/1000126883.html" target="_blank">{{$da['brank']}} {{$da['name']}} {{$da['descr']}}</a></p> 
          <label> {{$da['model']}} </label> 
          <div class="stateDetail"> 
           <div class="goodsStateTip"> 
            <span>现在完成下单,最迟11月9日21点前发货</span> 
           </div> 
          </div> 
         </div> 
       </td> 
         @if($da['d_price'] != null)
        <td> <p class="td-price-p">&yen;<i class="td-price" oldprice="6599.00" name="i">{{ceil($da['price']*$da['d_price']*0.1)}}</i><br /> </p> </td> 
        @else
        <td> <p class="td-price-p">&yen;<i class="td-price" oldprice="6599.00">{{$da['price']}}</i><br /> </p> </td>
        @endif
        <td> 
         <div class="plus_minus">
           <input type="hidden" name="id" value="{{$da['id']}}">
          <span class="cou_btn minus"><a href="/updatee/{{$da['id']}}">―</a></span> 
          <input type="text" value="{{$da['num1']}}" name="quantity" class="count counts" id="_num_1003746601" readonly="" /> 
          <span class="cou_btn plus"><a href="/updates/{{$da['id']}}">+</a></span> 
         <!--  <div class="re_tips">

           库存紧张
          </div> --> 
         </div> 
       </td> 

        <td> <p class="td-total-p">&yen;
          @if($da['d_price'] != null)
          <b class="td-total">{{ceil($da['price']*$da['d_price']*$da['num1']*0.1)}}</b>
          @else
          <b class="td-total">{{$da['price']*$da['num1']}}</b>
          @endif
          </p> 
      </td> 
        <td> 
         <div class="del_parent"> 
          <a href="/cartdel/{{$da['id']}}" class="td-del"></a> 
          <div class="del_tips"> 
           <p class="tips_arrow"><span class="tips_angle">◆</span><span class="tips_angle2">◆</span></p> 
           <p class="del_warn">删掉的商品可能会被别人抢走哦~要删除吗？</p> 
           <p class="cfix"><span data="1003746601" class="ok_del">确定</span><span class="can_del">取消</span></p> 
          </div> 
         </div> 
       </td> 
       </tr>
      @endforeach
      </tbody>
     </table> 
     <!-- 满减  start--> 
     <!-- 如果商品属于满减的 tr 添加一个 mj-order-list 类 --> 
     <!-- 多件多折  start--> 
     <!-- 如果商品属于多件多折的 tr 添加一个 mj-order-list 类 --> 
     <div class="by-box"> 
      <i>运费</i> 
      <b class="by-tips">本单免运费</b> 
     </div> 
    </form> 
    <!--S 结算 --> 
    <div class="total-section"> 
     <div class="total-sec-top"> 
      <div class="cart-time">
       <i class="cart-time-icon"></i>
       <span>商品库存有限，请在<i>0分0秒</i>内提交订单</span>
      </div> 
      <div class="total-sec-top-right"> 
       <p class="total-fenqi-p">分期付款最低<b class="total-fenqi">400</b>/月</p> 
      </div> 
     </div> 
     <div class="total-sec-bottom"> 
      <div class="total-tips"> 
       <a href="/" target="_blank">继续购物&gt;&gt;</a> 
       <p>共<span><b class="total-count totalNum">{{$nu}}</b></span>件商品，邮费<span>&yen; <b class="total-yf"> 0 </b></span>商品应付总额：<span>&yen; <b class="total-sum totalPrice"> {{$tot}}</b></span></p> 
      </div> 
     
       <a href="/address">立即结算</a>
      
     </div> 
    </div> 
    <!--E 结算 --> 
    <!-- S 浏览记录 --> 
    
    <div class="simple-footer"> 
     <div class="simple-footer-wrap"> 
      <div class="copyright">
        Copyright &copy; 2010-2015 深圳市华强北在线商务有限公司 版权所有 
       <a target="_blank" href="http://www.miitbeian.gov.cn">粤ICP备12050212号-1</a> 
       <a href="http://www.sznet110.gov.cn" rel="nofollow" target="_blank"><img alt="深圳网警" title="深圳网警" src="http://s.hqbcdn.com/assets/v3/images/newindex/foot_icon1_gb.jpg" /></a> 
       <a href="http://www.miitbeian.gov.cn" rel="nofollow" target="_blank"><img alt="经营许可证" title="增值电信业务经营许可证" src="http://s.hqbcdn.com/assets/v3/images/newindex/foot_icon2_gb.jpg" /></a> 
       <a href="http://www.ebs.gov.cn/EntCertificate.aspx?mainId=bc682492-860c-4d99-9130-b66ab75bcbf2" rel="nofollow" target="_blank"><img alt="市场监制主体身份认证" title="市场监制主体身份认证" src="http://s.hqbcdn.com//assets/v3/images/newindex/foot_icon3_gb.jpg" /></a> 
       <a target="_blank" rel="nofollow" href="http://www.szscjg.gov.cn/"> <img src="http://s.hqbcdn.com/assets/v3/images/newindex/foot_icon4_gb.jpg" title="电子商务消费者服务站" alt="电子商务消费者服务站" /></a> 
       <a class="f_link" href="http://www.okhqb.com/link" target="_blank">友情链接</a> 
       <a href="http://www.okhqb.com/sitemap.html" target="_blank" class="s_map">网站地图</a>关注我们：
       <a href="http://e.weibo.com/hqb360" target="_blank"><img src="http://s.hqbcdn.com/assets/v3/images/newindex/t_sina_gb.jpg" title="新浪微博" alt="新浪微博" /></a> 
       <a href="http://e.t.qq.com/okhqbokhqb" target="_blank"> <img src="http://s.hqbcdn.com/assets/v3/images/newindex/t_qq_gb.jpg" title="腾讯微博" alt="腾讯微博" /></a> 
      </div> 
     </div> 
    </div> 
    <div style="display:none;" id="scrollTop">
     <a href="javascript:;">&nbsp;</a>
    </div> 
    <script type="text/javascript" src="http://s2.hqbcdn.com/??build/assets/v4/script/login.auth.min.js?t=20150205"></script> 
    <div style="margin:0; text-align: center;height:14px;
 line-height:14px; color:#FFFFFF; font-size:12px;">
     canvas_12
    </div> 
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
    var _mvq = window._mvq || [];
    window._mvq = _mvq;
    _mvq.push(['$setAccount', 'm-354-1']);
    _mvq.push(['$logConversion']);
    (function() {
        var mvl = document.createElement('script');
        mvl.type = 'text/javascript'; mvl.async = true;
        mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(mvl, s);
    })();
</script> 
    <script type="text/javascript">
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
    <script type="text/javascript" src="http://s.hqbcdn.com/??lib/jquery/jquery.cookie.js,lib/dialog/artDialog.js?t=20140423"></script> 
    <script type="text/javascript" src="http://s.hqbcdn.com/??build/assets/v4/script/public.min.js?t=20150205"></script> 
    <script type="text/javascript">
        (function() {
            var s = document.createElement('script');
            var sparentNode =  document.getElementsByTagName('script')[0];
            s.type = 'text/javascript';
            s.async = 'true';
            s.src = 'http://a.okhqb.com/plus/ok.js?t=20140624';
            if(sparentNode)sparentNode.parentNode.insertBefore(s,sparentNode);
        })();
    </script> 
    <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "http://hm.baidu.com/hm.js?5251b1b3df8c7fd322ea256727293cf0";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(hm, s);
        })();
    </script> 
    <script type="text/javascript" src="http://s.hqbcdn.com/??build/assets/v2/script/analysis.min.js?t=20150205"></script> 
    <script type="text/javascript" src="http://s.hqbcdn.com/??lib/OKHQB/sign/sign.js,build/assets/v4/script/process/tradeCart-1.0.0.min.js?t=20160629"></script> 
    <noscript> 
     <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1000098639/?value=0&amp;label=LJ36CNGSggQQz5bx3AM&amp;guid=ON&amp;script=0" />
     </div> 
    </noscript> 
   </div>
  </div>
 </body>
 
</html>