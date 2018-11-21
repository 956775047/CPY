<!DOCTYPE HTML>
<html>
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="copyright" content="深圳市华强北商城商务有限公司版权所有" />
    <meta name="keywords" content="网上购物,网上商城,家电网购,网购,手机,数码,相机,笔记本,电脑,家电,厨卫电器,车载,电玩,MP3/MP4,DV,上网本,华强北" />
    <meta name="description" content="华强北商城(okhqb.com)是专业的手机数码网上购物商城,华强北在线商标官方唯一授权使用单位,产品包括手机,数码,相机,笔记本,电脑,家电,车载用品,MP3/MP4,DV,上网本,电玩近万类,并且每天更新深圳华强北各类手机数码产品最新报价,承诺全场正品低价,及时发货,配送到家,华强北在线竭诚为你提供更优质的服务 ！" />
    <link rel="shortcut icon" href="http://s.hqbcdn.com/favicon/favicon.ico" />
    <title>我的订单- 个人管理中心 - 华强北商城</title>
    <link rel="stylesheet" href="http://s2.hqbcdn.com/??assets/v4/css/base.css,assets/v4/css/public-new.css,lib/dialog/skins/dialog.css?t=20141015" />
    <link rel="stylesheet" type="text/css" href="http://s.hqbcdn.com/assets/v4/css/emoji.css?t=20140902" />
    <link rel="stylesheet" type="text/css" href="http://s.hqbcdn.com/??assets/v1/css/ucenter/index.css,assets/v3/css/member/member.css?t=20140807" />
    <link rel="stylesheet" type="text/css" href="http://s.hqbcdn.com/lib/My97DatePicker/skin/??default/datepicker.css,whyGreen/datepicker.css,WdatePicker.css?t=20121225" />
    <link rel="stylesheet" type="text/css" href="http://s.hqbcdn.com/??lib/dialog/skins/dialog.css?t=20121225" />
    <script type="text/javascript">< !--
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
      var xServer = "http://x.okhqb.com";
      //-->
      </script>
    <script type="text/javascript" src="http://s.hqbcdn.com/??lib/jquery/jquery-1.7.2.min.js,lib/jquery/jquery.lazyload.js?t=20140423"></script>
    <script type="text/javascript" src="http://s.hqbcdn.com/??lib/My97DatePicker/WdatePicker.js?t=20121225"></script>
    <script type="text/javascript" src="http://s.hqbcdn.com/??build/assets/v1/script/ucenter/order.min.js?t=20160531"></script>
    <!--[if IE 6]>
      <script src="http://s.hqbcdn.com/lib/jquery/DD_belatedPNG.js"></script>
      <script>DD_belatedPNG.fix('*');</script>
    <![endif]--></head>
  
  <body>
    <!-- toolbar 工具条 -->
    <div id="toolbar-bg">
      <div class="toolbar">
        <div class="toolbar-left">
            @if(empty(session('name')))
                <p class="unlogin dc-unlogin"><a href="/login" rel="nofollow" class="nav-bold">您好!&nbsp;请登录</a>&nbsp;<i>|</i>&nbsp;<a href="/register" rel="nofollow" class="nav-bold" style="color: #686868">注册</a></p>
            @else
                <p class="unlogin dc-unlogin"><a href="" rel="nofollow" class="nav-bold">您好!&nbsp;{{session('name')}}</a>&nbsp;<i>|</i>&nbsp;<a href="/outlogin" rel="nofollow" class="nav-bold" style="color: #686868">退出</a></p>
            @endif
        </div>
        <div class="toolbar-right">
          <ul class="toolbar-right-list">
            <li>
              <a href="http://my.okhqb.com/my/home.html?utml=member" target="_blank">我的账户</a>
              <i class="list-icon-new"></i>
              <div class="toolbar-my toolbar-right-box">
                <a href="/order">我的订单</a>
                <a href="http://my.okhqb.com/my/point.html?utml=coin" target="_blank">我的小强币</a>
                <a href="http://my.okhqb.com/my/subscription.html?utml=focus" target="_blank">我的关注</a>
                <a href="http://my.okhqb.com/my/coupons.html?utml=coupons" target="_blank">我的优惠券</a></div>
            </li>
            <li class="nav-msg dc-nav-msg ">
              <a href="http://my.okhqb.com/my/xiaoxi.html" target="_blank">我的消息
                <span class="nav-message">0</span></a>
              <i class="list-icon-new"></i>
              <div class=" toolbar-right-box toolbar-sub">
                <div class="msg-list-box" style="display: block">
                  <p style="margin-bottom:10px;line-heihgt:50px;text-align:center;left:0px;">暂无消息</p></div>
              </div>
            </li>
            <li>
              <a href="http://www.okhqb.com/help/index/1_70.html?utml=help" target="_blank">客户服务</a>
              <i class="list-icon-new"></i>
              <div class="toolbar-service toolbar-right-box">
                <a class="toolbar-tel" href="javascript:void(0);">客服热线：0755-88698888</a>
                <div class="kffw" style="width: 160px">
                  <a class="service" href="javascript:void(0)">在线客服</a>
                  <a href="http://www.okhqb.com/help/index/1000000066_1000000136.html?utml=souhou;" class="okhqb-phone">售后服务</a>
                  <a href="javascript:void(0);" class="okhqb_feed">意见反馈</a></div>
              </div>
            </li>
            <li>
              <a href="javascript:void(0);" target="_blank">关注我们</a>
              <i class="list-icon-new"></i>
              <div class=" toolbar-right-box toolbar-focus">
                <a class="ios" href="javascript:void(0)">IOS客户端</a>
                <a class="android" href="javascript:void(0)">安卓客户端</a>
                <a class="wx" href="javascript:void(0)">官方微信</a>
                <a class="wb" href="http://weibo.com/hqb360"></a>
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
            <a href="http://www.okhqb.com">华强北商城</a></h1>
          <span class="header_freight">全场运费5元，满59元包邮</span></div>
        <div class="header_vip">
          <a href="http://my.okhqb.com/my_photo.html" target="_blank">
            
        </div>
      </div>
    </div>
    <!-- 简洁头部 End -->
    <script type="text/javascript">$(document).ready(function() {

        var _mytoken = $('#mytoken').val() || '';
        $.ajax({
          type: "get",
          url: 'http://my.okhqb.com/my/getMemberInfoInIndex.json',
          data: {
            '_hqb_token': _mytoken
          },
          dataType: "jsonp",
          jsonp: 'callback',
          success: function(d) {
            if (d.code == 200) {
              $('#current_member_nickanme').html(d.data.nickname);

              var openInnerTest = d.data.openInnerTest;
              var totalPoint = d.data.point;
              if (totalPoint < 0) {
                totalPoint = 0;
              }
              if (openInnerTest) {
                var innerTestMember = d.data.innerTestMember;
                if (innerTestMember) {
                  $("#point_msg").html('<em id="current_member_point">' + totalPoint + '</em>');
                }
              } else {
                $("#point_msg").html('<em id="current_member_point">' + totalPoint + '</em>')
              }
              if (d.data.avatar != "") {
                $('#current_member_avatar').attr("src", 'http://img1.hqbcdn.com/images/memberpic/' + d.data.avatar);
              } else {
                $('#current_member_avatar').attr("src", 'http://s1.hqbcdn.com/assets/v3/images/member/member_head.jpg');
              }

            } else {}
            var _newtoken = d.formToken || '';
          }
        });
        $('.member_center_dt').hover(function() {
          $(this).removeClass('icon5').addClass('icon6');
        },
        function() {
          $(this).removeClass('icon6').addClass('icon5');
        });
      });</script>
    <div class="uc_wrap">
      <div class="uc_main cfix">
        <!-- 右侧主体内容开始 -->
        <div class="uc_right_content">
          <div class="sec-crumb">
            <ul class="sec-tab cfix">
              <li class="now-addr">现在的位置：</li>
              <li>
                <span>
                  <a>交易管理</a>
                </span>
                <span class="gt">&gt;</span></li>
              <li class="selected">
                <span>
                  <a>我的订单</a>
                </span>
              </li>
            </ul>
          </div>
          <div class="content_tab">
            <ul>
              <li>
                <a class="on_cur" href="/order">全部订单</a></li>

              <li>
                <a href="/shouhuo">待收货</a></li>
              <li>
                <a href="/dpj">待评价</a></li>
            </ul>
            <!-- S 新增加20161213 -->
            <div class="search-new">
               <form action="/order" method="get">
                   <div class="dataTables_filter" id="DataTables_Table_1_filter"> 
                    <label>搜索:订单号或商品名<input type="text" aria-controls="DataTables_Table_1" name="keywords" value="{{$request['keywords'] or ''}}"/></label>
                    <input type="submit" value="搜索">
                   </div>
                   </form></div>
            <!-- E 新增加20161213 --></div>
          <div class="main_content">
            <table width="100%">
              <colgroup>
                <col width="38%" />
                <col width="12%" />
                <col width="11%" />
                <col width="13%" />
                <col width="26%" />
                </colgroup>
              <div style="height:8px;"></div>
              <thead>
                <tr>
                  <th>订单商品</th>
                  <th>单价*数量</th>
                  
                  <th>实付款</th>
                  <th>订单状态</th>
                  <th style="border-right:#e3eaf0;">操作</th></tr>
              </thead>
              <form id="_tradeListFrom" method="get" action="http://my.okhqb.com/my/order.html">
                <input name="currentPage" id="_pageNo" type="hidden" value="1" />
                <input name="waitRate" id="_waitRate" type="hidden" value="N" />
                <input name="statusArray" id="trade_status" type="hidden" value="" />
                <input name="queryTime" id="trade_queryTime" type="hidden" value="THREE_MONTH" />
                <tbody class="order_list" id="order_154184834332010">
                  <tr>
                    <td height="5" style="border:none;" colspan="6"></td>
                  </tr>


                  @foreach($data as $row)
                  <tr class="order_num">
                    <td colspan="6">
                      <span class="order-num">
                        <label for="154184834332010">订单ID：
                          <a target="" href='' class="id">{{$row->id}}</a></label>
                      </span>
                      <span class="deal-time"></span></td>
                  </tr>
                  <tr class="order_num">
                    <td colspan="6">
                      <span class="order-num">
                        <label for="154184834332010">订单编号：
                          <a target="_blank" href='http://my.okhqb.com/my/order/show.html?tradeSn=154184834332010'>{{$row->order_num}}</a></label>
                      </span>
                      <span class="deal-time"></span></td>
                  </tr>
                  <tr class="order-item">
                    <td>
                      <div class="info_pic">
                        <a href="" target="_blank">
                          <img src="{{$row->pic}}" alt="" /></a>
                      </div>
                      <div class="info_title">
                        <a href="     http://www.okhqb.com/item/1000126604.html
                        " class="link_blue" target="_blank">{{$row->name}}</a>
                        <div class="stateDetail">
                          <span class="youhui_icon">特价</span>
                          <div class="goodsStateTip">
                            <span>最迟11月13日21点前发货</span></div>
                        </div>
                        <p class="gtxt">
                          <label>{{$row->descr}}</label></p>
                      </div>
                    </td>
                    <td>
                      <p class="o_price gtxt"></p>
                      <p>{{$row->price}}</p>
                      
                    </td>
                   
                    <td rowspan="1" class="order-price">
                      <p class="or_pr">{{$row->total}}</p>
                      </td>
                    <td rowspan="1" class="contact">

                      <p class="gtxt2" id="status_154184834332010">
                        <a href="javascript:void(0)" class="sta">
                          @if($row->status == 1) 确认收货 @elseif($row->status == 0) 待发货 @else 订单完成 @endif
                        </a>
                      </p>
                    </td>
                    <td rowspan="1" class="bor_r">
                      <div class="trade-actions">
                        <span id="trade_154184834332010">
                          
                        <p>
                          <a href="/pingjia/{{$row->sid}}">@if($row->appraise == 0) 去评价 @elseif($row->appraise == 1) 已评价 @endif</a></p>
                      </div>
                    </td>
                    @endforeach
                  </tr>
                </tbody>
                <tbody class="act">
                  <tr>
                    <td colspan="6">
                      <div id="pagination">
                        <ul class="page-nav inline-block">
                          <div class="paging cfix">
                            <div class="position_page fr">
                              <span class="fytxt">共
                                <em>1</em>页</span></div>
                            <div class="numpage fr">
                              <span class="pagecur">1</span></div>
                          </div>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </form>
            </table>
          </div>
        </div>
        <div class="cancelOrder">
          <div class="cancel_order">
            <p>取消订单之后将无法为您保留该商品，请谨慎操作！</p>
            <div class="cancel_reason cfix">
              <span>请选择取消订单的理由：</span>
              <select>
                <option value="0">请选择...</option>
                <option value="1">现在不想购买</option>
                <option value="2">商品价格较贵</option>
                <option value="3">有商品缺货</option>
                <option value="4">错误或者重复下单</option>
                <option value="5">支付不成功</option>
                <option value="6">等待时间过长</option>
                <option value="n">其它原因</option></select>
              <input id="sel_reason" type="hidden" value="0" /></div>
            <textarea id="cancel_reasons"></textarea>
            <div class="re_tips" style="display: none;">购买数量不能小于1 ！</div></div>
        </div>
        <!-- 左侧公用菜单 -->
        <div class="uc_left_sub">
          <dl class="sub_box member_center_dl" id="member_center">
            <dt class="icon6">
              <a href="http://my.okhqb.com/my/home.html"></a>
            </dt>
          </dl>
          <dl class="sub_box" id="play_okqhb">
            <dt class="icon2">我的财富</dt>
            <dd>
              <a href="http://my.okhqb.com/my/point.html" target="_self" title="我的小强币">小强币</a></dd>
            <dd>
              <a href="http://my.okhqb.com/my/giftcard.html" target="_self" title="小强卡">小强卡</a></dd>
          </dl>
          <dl class="sub_box">
            <dt class="icon3">小强商场</dt>
            <dd>
              <a href="http://buy.okhqb.com/buy/cart.html" target="_blank" title="购物车">我的购物车</a></dd>
            <dd class="on">
              <a href="http://my.okhqb.com/my/order.html" class="sub_cur" title="我的订单">我的订单</a></dd>
            <dd>
              <a href="http://my.okhqb.com/my/comments/replyMeList.html">我的讨论</a></dd>
            <dd>
              <a href="http://my.okhqb.com/my/repair/applyList.html">返修/退货</a></dd>
            <dd>
              <a href="http://my.okhqb.com/my/subscription.html">关注商品</a></dd>
            <dd>
              <a href="http://my.okhqb.com/my/coupons.html">优惠券</a></dd>
            <dd>
              <a href="http://my.okhqb.com/my/address.html">收货地址</a></dd>
          </dl>
          <dl class="sub_box">
            <dd class="new_icon">
              <a href="http://my.okhqb.com/my/xiaoxi.html" title="消息中心" class="icon8">消息中心</a></dd>
            <dd class="new_icon">
              <a href="http://my.okhqb.com/my/updateAccountInfo.html" title="账号信息" class="icon9">账户管理</a></dd>
          </dl>
        </div>
        <!-- 左侧公用菜单 end -->
        <span class="bot_bg"></span>
        <!--shaidan-->
        <!--shaidan--></div>
    </div>
    <div class="index-bottom">
      <div class="bottom-box cfix">
        <div class="bottom-box-left">
          <!-- <img src="images/appCode.jpg" width="116" height="116">-->
          <div class="bottom-app-code"></div>
          <p>华强北商城</p>
          <p>微信公众号</p>
        </div>
        <div class="bottom-box-center">
          <ul class="box-center">
            <li>
              <h3>新手指南</h3>
              <a href="http://www.okhqb.com/help/index/1_59.html" target="_blank">找回密码</a>
              <a href="http://www.okhqb.com/help/index/1_28.html" target="_blank">注册账号</a>
              <a href="http://www.okhqb.com/help/index/1_13.html" target="_blank">交易条款</a></li>
            <li>
              <h3>支付配送</h3>
              <a href="http://www.okhqb.com/help/index/51_1000000119.html" target="_blank">网上支付</a>
              <a href="http://www.okhqb.com/help/index/1000000065_1000000125.html" target="_blank">配送运费</a>
              <a href="http://www.okhqb.com/help/index/1000000065_1000000124.html" target="_blank">配送方式</a></li>
            <li>
              <h3>售后服务</h3>
              <a href="http://www.okhqb.com/help/index/1000000066_1000000129.html" target="_blank">售后政策</a>
              <a href="http://www.okhqb.com/help/index/1000000066_1000000130.html" target="_blank">售后流程</a>
              <a href="http://www.okhqb.com/help/index/1000000066_1000000131.html" target="_blank">售后申请</a></li>
            <li>
              <h3>关于我们</h3>
              <a href="http://www.okhqb.com/about/about" target="_blank">公司介绍</a>
              <a href="http://www.okhqb.com/about/yssm" target="_blank">隐私申明</a>
              <a href="http://www.okhqb.com/about/hr" target="_blank">招贤纳士</a></li>
          </ul>
        </div>
        <div class="bottom-box-right cfix">
          <div class="contact-us">
            <h3>联系我们</h3>
            <p>客服热线：0755-88698888</p>
            <!--<p>工作日：9:00-20:00</p>-->
            <div class="gb-okhqb-yj contact-advice">
              <span class="okhqb_feed">意见反馈</span></div>
          </div>
          <div class="attention-us cfix">
            <h3>关注我们</h3>
            <div class="weiXin">
              <div class="weiXinCode"></div>
            </div>
            <div class="weiBo">
              <div class="weiBoCode"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="gb-okhqb-rz">
      <p class="gb-okhqb-link">
        <a href="http://www.okhqb.com/">华强北商城</a>|
        <a href="http://www.okhqb.com/">华强北</a>|
        <a href="http://www.okhqb.com/">深圳华强北</a>|
        <a href="http://www.okhqb.com/zixun" target="_blank" style="color:red; font-weight:bold">热点资讯</a>|
        <a href="http://www.okhqb.com/link" target="_blank">友情链接</a>|
        <a href="http://www.okhqb.com/sitemap.html" target="_blank">网站地图</a>|
        <a href="http://www.okhqb.com/gonghuo.html" target="_blank" style="color:red; font-weight:bold;font-family: '微软雅黑';">供应商入驻</a>|
        <a href="http://www.okhqb.com/help.html" target="_blank">帮助中心</a></p>
      <p class="gb-okhqb-copy">Copyright © 2010-2016 深圳市华强北在线商务有限公司 版权所有
        <a target="_blank" href="http://www.miitbeian.gov.cn">粤ICP备12050212号-1</a></p>
      <p class="gb-okhqb-jd okhqb-footer-link">
        <a class="wj_btn" href="http://www.sznet110.gov.cn" target="_blank" rel="nofollow"></a>
        <a class="dx_btn" href="http://www.miitbeian.gov.cn" target="_blank" rel="nofollow"></a>
        <a class="sc_btn" href="http://www.ebs.gov.cn/EntCertificate.aspx?mainId=bc682492-860c-4d99-9130-b66ab75bcbf2" target="_blank" rel="nofollow"></a>
        <a class="gl_btn" href="http://www.szscjg.gov.cn/" target="_blank" rel="nofollow"></a>
        <a class="sm" href="http://www.anquan.org/authenticate/cert/?site=www.okhqb.com&amp;at=realname" target="_blank"></a>
        <a href="https://credit.szfw.org/CX20160908025325020138.html" target="_blank" oncontextmenu="return false;" style="background: none;">
          <img style="display: block;margin-top: 5px;*margin-left: 5px;" src="http://icon.szfw.org/cert.png" border='0' /></a>
      </p>
    </div>
    <!-- 反馈弹出框 -->
    <div class="feedback cfix hide">
      <div class="help_offer_1 cfix">
        <textarea name="inquiry_remark" cols="" rows="" id="inquiry_remark" style="color: rgb(204, 204, 204);">请输入您对我们网站有什么意见或建议，您的反馈将帮助我们更好的为您服务！</textarea>
        <input type="text" style="color: rgb(204, 204, 204);" name="inquiry_email" id="inquiry_email" value="请您填写您的邮箱" class="w_e_mail" placeholder="请您填写您的邮箱">
        <input class="help_tijiao" id="u_inquiry_submit" name="" value=""></div>
    </div>
    <!-- 反馈弹出框 end -->
    <div style="margin:0; padding:0; height:14px; line-height:14px;
    color:#FFFFFF; font-size:12px;text-align: center">canvas_32</div>
    <script type="text/javascript" src="http://s2.hqbcdn.com/??build/assets/v4/script/login.auth.min.js?t=20150205"></script>
    <script>(function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] ||
        function() { (i[r].q = i[r].q || []).push(arguments)
        },
        i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

      ga('create', 'UA-30148206-1', 'okhqb.com');
      ga('set', 'UA-30148206-1', {
        'userId': '2002112993'
      });
      ga('send', 'pageview');</script>
    <script type="text/javascript">var _mvq = window._mvq || [];
      window._mvq = _mvq;
      _mvq.push(['$setAccount', 'm-354-1']);
      _mvq.push(['$logConversion']); (function() {
        var mvl = document.createElement('script');
        mvl.type = 'text/javascript';
        mvl.async = true;
        mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js': 'http://static.mediav.com/mvl.js');
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(mvl, s);
      })();</script>
    <script type="text/javascript">var _mvq = _mvq || [];
      _mvq.push(['$setAccount', 'm-211723-0']);
      _mvq.push(['$logConversion']); (function() {
        var mvl = document.createElement('script');
        mvl.type = 'text/javascript';
        mvl.async = true;
        mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js': 'http://static.mediav.com/mvl.js');
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(mvl, s);
      })();</script>
    <script type="text/javascript" src="http://s.hqbcdn.com/??lib/jquery/jquery.cookie.js,lib/dialog/artDialog.js?t=20140423"></script>
    <script type="text/javascript" src="http://s.hqbcdn.com/??build/assets/v4/script/public.min.js?t=20150205"></script>
    <script type="text/javascript">(function() {
        var s = document.createElement('script');
        var sparentNode = document.getElementsByTagName('script')[0];
        s.type = 'text/javascript';
        s.async = 'true';
        s.src = 'http://a.okhqb.com/plus/ok.js?t=20140624';
        if (sparentNode) sparentNode.parentNode.insertBefore(s, sparentNode);
      })();</script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "http://hm.baidu.com/hm.js?5251b1b3df8c7fd322ea256727293cf0";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
    <script type="text/javascript" src="http://s.hqbcdn.com/??lib/OKHQB/sign/sign.js?t=20140730"></script>
    <script type="text/javascript" src="http://s.hqbcdn.com/??build/assets/v2/script/analysis.min.js?t=20150205"></script>
    <script type="text/javascript">$(".verifyClose").click(function() {

        var tradeSn = $(this).attr('trade_sn');
        if (/^\d{15}$/.test(tradeSn) == false) return false;
        art.dialog({
          lock: true,
          id: 'dialogID',
          height: 200,
          width: 380,
          title: '确定取消订单?',
          content: $('#_quxiaodingdan').html(),
          ok: function() {
            return closeOrder(tradeSn);
          },
          cancel: function() {}

        });

      });

      function changeValue(value) {
        if (value == 'other') {
          $('#reason').html('<textarea  maxlength="144" style="width:260px;" id="description"></textarea>');
        } else {
          $('#reason').html('<input type="hidden"  id="description" value="' + value + '"></input>');
        }
      }

      function closeOrder(tradeSn) {
        var reason = encodeURIComponent($('#description').val());
        if (reason == null || reason == '') {
          alert("请选择理由");
          return false;
        }

        $.ajax({
          type: "GET",
          dataType: "json",
          url: 'http://my.okhqb.com/my/order/close.json?',
          async: false,
          data: "tradeSn=" + tradeSn + "&reason=" + reason,
          success: function(json) {
            if (json.code == 200) {
              $('#status_' + tradeSn).text("交易关闭");
              $('#trade_' + tradeSn).text("");
              return true;
            } else {
              alert(json.msg);
              return false;
            }
          }
        });
        return true;
      }

      function delayTimeForPayment(tradeSn) {
        art.dialog({
          lock: true,
          id: 'delayTimeDialogID',
          height: 100,
          width: 300,
          title: '温馨提示',
          content: '延迟付款时间2小时? 只能延迟一次哦',
          ok: function() {
            $.ajax({
              type: "GET",
              dataType: "json",
              url: 'http://my.okhqb.com/my/order/delayTimeForPayment.json?',
              async: false,
              data: "tradeSn=" + tradeSn,
              success: function(json) {
                if (json.code == 200) {

                  art.dialog({
                    lock: true,
                    id: 'dialogID',
                    height: 100,
                    width: 300,
                    title: '温馨提示',
                    content: '延迟时间成功',
                    ok: function() {
                      window.location.href = "http://my.okhqb.com/my/order.html"
                    }
                  });

                } else {
                  art.dialog({
                    lock: true,
                    id: 'dialogID',
                    height: 100,
                    width: 300,
                    title: '温馨提示',
                    content: json.msg,
                  });
                  return false;
                }
              }
            });
            return true;
          },
          cancel: function() {}
        });

      }

      function confireGoods(tradeSn) {
        art.dialog({
          lock: true,
          id: 'confireGoodsID',
          height: 100,
          width: 300,
          title: '温馨提示',
          content: '确定确认收货?',
          ok: function() {
            $.ajax({
              type: "GET",
              dataType: "json",
              url: 'http://my.okhqb.com/my/affirmTrade.json?',
              async: false,
              data: "tradeSn=" + tradeSn,
              success: function(json) {
                if (json.code == 200) {

                  art.dialog({
                    lock: true,
                    id: 'dialogID',
                    height: 100,
                    width: 300,
                    title: '温馨提示',
                    content: '确认收货成功，赶紧去评价吧！',
                    ok: function() {
                      $('#_tradeListFrom').submit();
                    }
                  });

                } else {
                  art.dialog({
                    lock: true,
                    id: 'dialogID',
                    height: 100,
                    width: 300,
                    title: '温馨提示',
                    content: json.msg,
                  });
                  return false;
                }
              }
            });
            return true;
          },
          cancel: function() {}
        });

      }

      function findFreithtOrder(shipCompany, shipNo) {

        $.ajax({
          type: "GET",
          dataType: "json",
          url: 'http://my.okhqb.com/my/freight/query.json?',
          async: false,
          data: "shipCompany=" + shipCompany + "&shipNo=" + shipNo,
          success: function(json) {
            if (json.code == 200) {
              if (json.data.length > 0) {
                str = '';
                $.each(json.data,
                function(i, result) {
                  str += result + "<br>";
                });
                showFreight(str);
              } else {
                var expressInfo = {
                  "YUNDA": "韵达快运",
                  "YTO": "圆通快递",
                  "SF": "顺丰速运"
                }
                showFreight("暂未跟踪到物流信息，您也可请复制单号:" + shipNo + " 到 " + expressInfo[shipCompany] + "官网查询。");
              }
            } else {
              showFreight(json.msg);
            }
          }
        });

      }
      function showFreight(message) {
        art.dialog({
          id: 'dialogID',
          height: 150,
          width: 450,
          title: '物流跟踪',
          content: message,
          ok: function() {

}
        });
      }

      function gotopage(pageNo) {
        if (pageNo > 0) {
          $('#_pageNo').val(pageNo);
          if ($('#_searchKey').val() != '') {
            goSearch();
          } else {
            $('#_tradeListFrom').submit();
          }

        }
      }

      function goSearch() {
        var searchKey = $('#_searchKey').val() window.location.href = "http://my.okhqb.com/my/order.html?searchKey=" + searchKey + "&currentPage=" + $('#_pageNo').val();
      }

      function gotoStatus(status) {
        if (status != null && status != '') {
          $('#trade_status').val(status);
        }
        if (status != null && status == '2WAIT_BUYER_CONFIRM_GOODS,TRADE_FINISHED') {
          $('#waitRate').val("Y");
        }

        $('#_tradeListFrom').submit();

      }

      function gotoQueryTime(queryTime) {
        if (queryTime != null && queryTime != '') {
          $('#trade_queryTime').val(queryTime);
        }

        $('#_tradeListFrom').submit();

      }

      $('.findIsPayed_js').click(function() {
        var tradeSn = jQuery(this).attr('trade_sn');

        $.ajax({
          type: "POST",
          dataType: "json",
          url: 'http://my.okhqb.com/my/trade/findIsPayed.json',
          async: false,
          data: "tradeSn=" + tradeSn,
          success: function(result) {
            if (result.code == 200) {
              art.dialog({
                top: 100,
                icon: 'warning',
                content: result.data
              });
            } else {
              art.dialog({
                top: 100,
                icon: 'error',
                content: result.msg
              });
              return false;
            }
          }
        });
      }) $(".delbtn").click(function() {
        var tradeSn = $(this).attr('trade_sn');
        if (/^\d{15}$/.test(tradeSn) == false) return false;
        art.dialog({
          lock: true,
          id: 'delbtn_dialogID',
          height: 200,
          width: 380,
          title: '删除订单',
          content: '确定删除订单？删除后将无法再显示,请慎重选择',
          ok: function() {
            $('#order_' + tradeSn).remove();
            return deleteOrder(tradeSn);
          },
          cancel: function() {}

        });

      });
      function deleteOrder(tradeSn) {
        $.ajax({
          type: "GET",
          dataType: "json",
          url: 'http://my.okhqb.com/my/order/delete.json?',
          async: false,
          data: "tradeSn=" + tradeSn,
          success: function(result) {
            if (result.code == 200) {
              art.dialog({
                top: 100,
                icon: 'warning',
                time: 2,
                content: '订单删除成功'
              });
            } else {
              art.dialog({
                top: 100,
                icon: 'error',
                content: result.msg
              });
              return false;
            }
          }
        });
      };</script>
    <noscript>
      <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1000098639/?value=0&amp;label=LJ36CNGSggQQz5bx3AM&amp;guid=ON&amp;script=0" /></div>
    </noscript>
  </body>
 <script>
// alert($);
$('.sta').click(function(){
    obj=$(this);
    //获取id
    // id=$(this).parents().find("td:first").html();
    id=$(this).parents().parents().parents().prev().prev().find("a:first").html();
    // alert(id);
    //获取状态内容
    status=obj.html();
    // alert(status);
    $.get("/homeedit",{id:id,status:status},function(data){
      // alert(data);
        if(data==1){
          sta=obj.html("已收货");
        }
    },'json');
    
});
 </script>
</html>