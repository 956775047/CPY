var Auth=window.Auth||{};Auth={init:function(){var s=this.getAuthInfo();s&&this.renderingLoginBar(s),this.msgHover(),this.gotoLogin()},getAuthInfo:function(){var s=$.cookie("auth"),t=$.cookie("session");if(!s||!t)return null;_auth=$.parseJSON(s);try{returnValue=$.parseJSON(_auth)}catch(o){returnValue=null}return returnValue},renderingLoginBar:function(s){var t=$(".pro-tool-status");if(!s)return void $.ajax({url:"/member/getLoginInfo.json?callback=?",dataType:"json",success:function(s){if(200==s.code){this.getMsg();var o=$.parseJSON(s.data);if(0==o.logined)_unLoginBar.show(),_loggedBar.hide();else{var a=o.nickname,e="";7==o.sys_register&&(a=o.mobile),1==o.member_type?e="http://my.okhqb.com/my/home.html?ad=dd_id":5==o.member_type&&(e="http://my.okhqb.com/my/order.html"),t.html('华强北商城欢迎您：<a href="'+e+'" target="_blank" class="tool-bold-red">'+a+'</a>&nbsp;&nbsp;&nbsp;<a href="http://www.okhqb.com/member/logout" class="logout">[退出]</a>'),$(".dc-nav-user").html(a),$(".dc-unlogin").hide(),$(".dc-logined").show()}}}});this.getMsg();var o=s.nickname,a="";7==s.sys_register&&(o=s.mobile),1==s.member_type?a="http://my.okhqb.com/my/home.html?ad=dd_id":5==s.member_type&&(a="http://my.okhqb.com/my/order.html"),t.html('华强北商城欢迎您：<a href="'+a+'" target="_blank" class="tool-bold-red">'+o+'</a>&nbsp;&nbsp;&nbsp;<a href="http://www.okhqb.com/member/logout" class="logout">[退出]</a>'),$(".dc-nav-user").html(o),$(".dc-unlogin").hide(),$(".dc-logined").show()},gotoLogin:function(){$(".pro-login").click(function(){OKHQB_sign.dialog({sign_in_callback:function(){window.location.reload()}})})},autoLogin:function(){var s=window.location.href;!$.cookie("auth")&&$.cookie("okhqb_auto_login")&&$.cookie("auto_login_member_id")&&s.indexOf("logincallback")<0&&s.indexOf(".json")<0&&(window.location="/member/autoLogin.html?forward="+window.location.href)},getMsg:function(){$.ajax({url:"http://my.okhqb.com/my/message/unread.json",dataType:"jsonp",jsonpCallbak:"callback",success:function(s){200==s.code&&$(".dc-nav-msg b").html(s.data)}})},msgHover:function(){$(".toolbar-right-list li:not(..tel-phone)").hover(function(){$(this).addClass("mouse-on"),$(this).find(".toolbar-right-box").show()},function(){$(this).removeClass("mouse-on"),$(this).find(".toolbar-right-box").hide()}),$(".okhqb-phone").hover(function(){$(".toolbar-days").show()},function(){$(".toolbar-days").hide()}),$(".nav-msg").hover(function(){var s=$(this).position().left;$(this).addClass("nav-msg-on"),$(".msg-list-box").css("left",s+"px").show()},function(){$(this).removeClass("nav-msg-on"),$(".msg-list-box").hide()}),$(".msg-list-box").hover(function(){$(".nav-msg").addClass("nav-msg-on"),$(this).show()},function(){$(".nav-msg").removeClass("nav-msg-on"),$(".msg-list-box").hide()});var s=!1;$(".nav-msg").mouseover(function(){return s?!1:(s=!0,setTimeout(function(){s=!1},3e4),$.ajax({type:"GET",url:"http://my.okhqb.com/my/message/subscribeMessages.json",dataType:"jsonp",jsonp:"callback",success:function(s){if(200===s.code){if(""==s.data)return $(".msg-list-box").html('<p style="margin-bottom:10px;line-heihgt:50px; text-align:center;">暂无消息</p>'),!1;var t="<ul>",o=s.data.subscribeOrdersMessages,a=o.length,e=s.data.subscribeGoodsMessages,i=e.length;if(o&&a>0){t+='<li><p class="list-title list-no-top"><i>|</i><span class="msg-list-bold">您购买的商品</span>&nbsp;有<span class="odm">'+a+"</span>个物流变化</p>";for(var n=0;a>n;n++)t+=n!==a-1?'<p class="list-info list-info-border">':'<p class="list-info">',t+='<a href="http://my.okhqb.com/my/order.html?fromTpe=S"><img src="'+o[n].imageUrl+'" width="55" height="50" /></a>',t+='<span><a href="http://my.okhqb.com/my/order.html?fromTpe=S" target="_blank">'+o[n].tradeSn+"</a></span><span>"+o[n].message+"</span>",t+='<a href="javascript:void(0);" data-listNum="'+o[n].messageId+'" data-counts="odm" class="msg-delte">×</a></p>  ';t+="</li>"}if(e&&i>0){t+=0==a?'<li><p class="list-title list-no-top"><i>|</i><span class="msg-list-bold">您关注的商品</span>&nbsp;有<span class="sgm">'+i+"</span>个动态变化</p>":'<li><p class="list-title"><i>|</i><span class="msg-list-bold">您关注的商品</span>&nbsp;有<span class="sgm">'+i+"</span>个动态变化</p>";for(var n=0;i>n;n++)t+=n!==i-1?'<p class="list-info list-info-border">':'<p class="list-info">',t+='<a href="hhttp://my.okhqb.com/my/subscription.html?fromTpe=S"><img src="'+e[n].imageUrl+'" width="55" height="50" /></a>',t+='<a href="http://my.okhqb.com/my/subscription.html?fromTpe=S" target="_blank" class="list-link">'+e[n].skuName+"</a>",t+='<a href="javascript:void(0);" data-listNum="'+e[n].messageId+'" class="msg-delte" data-counts="sgm">×</a></p>  ';t+="</li>"}t+="</ul>",$(".msg-list-box").html(t)}}}),void $(".msg-delte").live("click",function(){var t=$(this).attr("data-listNum"),o=$(this),a=$(this).attr("data-counts");$.ajax({type:"GET",url:"http://my.okhqb.com/my/message/unShow.json?messageId="+t,dataType:"jsonp",jsonp:"callback",success:function(t){if(200===t.code){s=!1,o.parent().remove();var e=$("."+a).html(),i=$(".dc-nav-msg b").html();e--,i--,i=i>0?i:0,$(".dc-nav-msg b").html(i),0>=e?$("."+a).parents("li").remove():$("."+a).html(e)}}})}))})}},$(document).ready(function(){$(".dc-new-phone").hover(function(){var s='<div class="kf-new-time">工作日：9:00-22:00<br/>节假日：9:00-18:00</div>';$(this).after(s)},function(){$(this).next(".kf-new-time").remove()}),Auth.init();var s=($.cookie("caibei_attach"),$.cookie("caibei_ShowMsg")),t=$.cookie("caibei_HeadShow"),o=$.cookie("caibei_JiFenUrl"),a=$.cookie("caibei_nickname"),e="",i=$(".thelogged"),n="";if(t){var l=t.replace(/\+/g," "),e=$("#mod_top_banner");s?(n+='<div class="mod_top_banner"><div class="main_area"><div class="sale_tip">',n+=decodeURI(l.substring(1,l.length-1)),n+='</div><div class="login_status"><span class="qqUser login_btn"><span class="name">',n+=s.substring(1,s.length-1),n+='</span><a class="my_caibei" title="我的彩贝积分" target="_blank" href="',n+=o,n+='" ytag="06808">我的彩贝积分</a></div></div></div>',e.html(n),i.html('您好，<a class="u_name" rel="nofollow" href="http://my.okhqb.com/my/order.html">'+a.substring(1,a.length-1)+'</a>&nbsp;&nbsp;欢迎回来<a href="http://www.okhqb.com/member/logout.html" class="logout">&nbsp;退出</a><a href="http://my.okhqb.com/my/home.html?ad=dd_id" class="signEveryday"><span>签到赚小强币</span></a>').show()):e.hide()}});