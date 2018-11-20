@extends("Home.HomePublic.homepublic")
@section("admin")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="keywords" content="福利,大礼包,优惠券,华强北商城,华强北" />
    <meta name="description" content="华强北商城新人专享福利，180元大礼包赠送，购买苹果iPhone，国产品牌手机，数码配件，优惠多多，独此一家优惠专享数码商城。" />
    <title>新人专享福利，180元大礼包赠送，超值特惠，尽在华强北商城。
</title>
    <link rel="stylesheet" type="text/css" href="/static/homes/static/css/25f5422490334f4fbfe89af5ac973c2c.css"/>
    <link rel="stylesheet" href="/static/homes/static/css/index08.css"/>
    <script type="text/javascript" src="/static/homes/static/js/ed5c9b37328c4dfaaa2139b198fbe449.js"></script>
    <script type="text/javascript" src="/static/homes/static/js/7d6d653b84b04be6b0b1b282d4f301e3.js"></script>
</head>

<body>
<!-- 公告 -->




<!-- 搜索栏 -->

 
<div class="new-gift">
<div class="head">
    <div class="head1"></div>
    <div class="head2"></div>
</div>
<div class="floor-one">
    <div class="title-one"></div>
    <div class="content-one">
        <div class="ticket-one"></div>
        <div class="explain-one">
            <ul>
                <li>1. 新注册用户可在本页面领取80元新人礼包，领取后可在“个人中心-我的优惠券”中查询;</li>
                <li>2. 新人礼包使用时间：自领取十五天内有效;</li>
                <li>3. 手机、平板、电脑专用券仅支持购买手机、平板、电脑类商品，数码专用券仅支持购买数码<br/>&nbsp;&nbsp;&nbsp;&nbsp;类商品，其中特惠商品及抢购商品除外；</li>
                <li>4. 使用新人专享券的订单若发生退货，新人券在有效期内将返回至用户个人中心，可再次使<br/>&nbsp;&nbsp;&nbsp;&nbsp;用；若新人券订单退货时已超过券有效期，券将自动失效，不做延期。</li>
            </ul>
        </div>
        <div id="getTicket" class="get-ticket">
            <span>马上领取</span>
        </div>
    </div>
</div>
<div class="floor-two">
    <div class="title-two"></div>
    <div class="content-two">
        <div class="ticket-two"></div>
        <div class="explain-two">
            <ul>
                <li>1. 首次成功下单的用户，系统将自动发放100元大礼包到“个人中心”; </li>
                <li>2. 首购礼包使用时间：自获得后十五天内有效;</li>
                <li>3. 手机、平板、电脑专用券仅支持购买手机、平板、电脑类商品，数码专用券仅支持购买数码类<br/>&nbsp;&nbsp;&nbsp;&nbsp;商品，其中特惠商品及抢购商品除外;</li>
                <li>4. 使用首购返券的订单若发生退货，券在有效期内将返回至用户个人中心，可再次使用；若首购<br/>&nbsp;&nbsp;&nbsp;&nbsp;所返券订单退货时已超过券有效期，券将自动失效，不做延期。</li>
            </ul>
        </div>
    </div>
</div>
<div class="floor-three">
<div class="title-three" id="go-buy"></div>
<div class="content-three">
<!-- <ul class="guide-title cfix">
    <li class="noneCheck1 check1 nav-tap" data-id="1">海淘优选</li>
    <li class="noneCheck2 nav-tap" data-id="2">国货精品</li>
    <li class="noneCheck3 nav-tap" data-id="3">手机配件</li>
    <li class="noneCheck4 nav-tap" data-id="4">数码影音</li>
</ul> -->
<ul class="checkList1 cfix">
    @foreach($daa as $row)
        <li class="phone-box">
        <a href="" target="_blank" class="phone-img">
            <img width="250" height="250" class='lazy' src="{{$row->pic}}" width="100px" height="100px" alt="">
        </a>
        <a href="" target="_blank" class="phone-name text-over">{{$row->name}}</a>
        <a href="" target="_blank" class="phone-info text-over">{{$row->descr}}</a>
        <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>{{ceil($row->price)}}</span><a href="" target="_blank" class="phone-btn font-color1">立即购买</a></p>
    </li>
     
      @endforeach
    
        
  
       
  
    </ul>
<ul class="checkList2 cfix">
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125600.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img2.hqbcdn.com/product/6e/fc/6efc4e9fcf83365c7b85eaac75ca0526.250.png" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125600.html?utml=xinren2016" target="_blank" class="phone-name text-over">华为 P20 Pro</a>
            <a href="http://www.okhqb.com/item/1000125600.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>3999</span><a href="http://www.okhqb.com/item/1000125600.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125435.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img1.hqbcdn.com/product/71/f0/71f0426e786e3966840f025207242df0.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125435.html?utml=xinren2016" target="_blank" class="phone-name text-over">华为 Mate 10 Pro</a>
            <a href="http://www.okhqb.com/item/1000125435.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>2999</span><a href="http://www.okhqb.com/item/1000125435.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125653.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img9.hqbcdn.com/product/40/d4/40d4b81a5ff22837cf5fbc2026a5cc1b.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125653.html?utml=xinren2016" target="_blank" class="phone-name text-over">华为 荣耀10</a>
            <a href="http://www.okhqb.com/item/1000125653.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>2388</span><a href="http://www.okhqb.com/item/1000125653.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125583.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img3.hqbcdn.com/product/b6/a6/b6a6a56b4d91bdfb0923be151e468456.250.png" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125583.html?utml=xinren2016" target="_blank" class="phone-name text-over">vivo X21 全面屏</a>
            <a href="http://www.okhqb.com/item/1000125583.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>2499</span><a href="http://www.okhqb.com/item/1000125583.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125675.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img6.hqbcdn.com/product/17/a7/17a77f75019282b2eb4bf3a6b8c32ce6.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125675.html?utml=xinren2016" target="_blank" class="phone-name text-over">魅族 15 汝窑白</a>
            <a href="http://www.okhqb.com/item/1000125675.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>2099</span><a href="http://www.okhqb.com/item/1000125675.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000126271.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img1.hqbcdn.com/product/65/f4/65f4d98b386d80c19377911d181e4f39.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000126271.html?utml=xinren2016" target="_blank" class="phone-name text-over">vivo NEX 零界全面屏</a>
            <a href="http://www.okhqb.com/item/1000126271.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>3399</span><a href="http://www.okhqb.com/item/1000126271.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000126209.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img12.hqbcdn.com/product/06/4f/064ffe8baa8a18a46336bad70d1299a8.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000126209.html?utml=xinren2016" target="_blank" class="phone-name text-over">小米 8 全面屏游戏智能手机 </a>
            <a href="http://www.okhqb.com/item/1000126209.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>2399</span><a href="http://www.okhqb.com/item/1000126209.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125788.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img5.hqbcdn.com/product/12/1f/121f9edfa8a455078ff65657379d2a7d.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125788.html?utml=xinren2016" target="_blank" class="phone-name text-over">OPPO R15 梦镜版</a>
            <a href="http://www.okhqb.com/item/1000125788.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>2799</span><a href="http://www.okhqb.com/item/1000125788.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
    </ul>
<ul class="checkList3 cfix">
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000126331.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img3.hqbcdn.com/product/a7/f2/a7f26f8c2f4daad2f1dee11faf7269fb.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000126331.html?utml=xinren2016" target="_blank" class="phone-name text-over">伦敦巴士充电宝</a>
            <a href="http://www.okhqb.com/item/1000126331.html?utml=xinren2016" target="_blank" class="phone-info text-over">10000mAh</a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>88</span><a href="http://www.okhqb.com/item/1000126331.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000123543.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img14.hqbcdn.com/product/48/86/4886c76739fca7aed43a08611cc599bc.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000123543.html?utml=xinren2016" target="_blank" class="phone-name text-over">AirPods</a>
            <a href="http://www.okhqb.com/item/1000123543.html?utml=xinren2016" target="_blank" class="phone-info text-over">持久续航，无线，无繁琐</a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>999</span><a href="http://www.okhqb.com/item/1000123543.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000117923.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img14.hqbcdn.com/product/b6/78/b67832549038ebd82f55242708f659be.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000117923.html?utml=xinren2016" target="_blank" class="phone-name text-over">Lightning数据线+5W 充电器</a>
            <a href="http://www.okhqb.com/item/1000117923.html?utml=xinren2016" target="_blank" class="phone-info text-over">买一套更划算</a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>88</span><a href="http://www.okhqb.com/item/1000117923.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000126360.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img3.hqbcdn.com/product/aa/ea/aaead48dc368fd75093fc37d6dbc43c1.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000126360.html?utml=xinren2016" target="_blank" class="phone-name text-over">WANLE 游戏手机壳</a>
            <a href="http://www.okhqb.com/item/1000126360.html?utml=xinren2016" target="_blank" class="phone-info text-over">内置26款游戏，穿越童年！</a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>29</span><a href="http://www.okhqb.com/item/1000126360.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125899.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img4.hqbcdn.com/product/92/26/9226f1f45bd28d78738a3b281e1fe5d3.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125899.html?utml=xinren2016" target="_blank" class="phone-name text-over">苹果无线充电器</a>
            <a href="http://www.okhqb.com/item/1000125899.html?utml=xinren2016" target="_blank" class="phone-info text-over">苹果推荐充电器7.5W功率快充</a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>358</span><a href="http://www.okhqb.com/item/1000125899.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125693.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img14.hqbcdn.com/product/7e/fe/7efebe813792b9a57d08fb3dc1ce8362.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125693.html?utml=xinren2016" target="_blank" class="phone-name text-over">小米小爱音箱mini</a>
            <a href="http://www.okhqb.com/item/1000125693.html?utml=xinren2016" target="_blank" class="phone-info text-over">人工智能音箱</a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>169</span><a href="http://www.okhqb.com/item/1000125693.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000126341.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img13.hqbcdn.com/product/ae/f4/aef419c24b63505e54f9255cc03df53e.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000126341.html?utml=xinren2016" target="_blank" class="phone-name text-over">JBL GO 2 音乐金砖二代</a>
            <a href="http://www.okhqb.com/item/1000126341.html?utml=xinren2016" target="_blank" class="phone-info text-over">可装进口袋的小音箱 IPX7防水</a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>249</span><a href="http://www.okhqb.com/item/1000126341.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000124779.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img3.hqbcdn.com/product/9a/9f/9a9f4e1a72cf267e6dd6b92b3c4e7477.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000124779.html?utml=xinren2016" target="_blank" class="phone-name text-over">bcase TUP数据线集线器</a>
            <a href="http://www.okhqb.com/item/1000124779.html?utml=xinren2016" target="_blank" class="phone-info text-over">帮你捋顺桌面繁琐！</a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>19.9</span><a href="http://www.okhqb.com/item/1000124779.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
    </ul>
<ul class="checkList4 cfix">
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125841.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img4.hqbcdn.com/product/c5/16/c516797f7c87eb1cedbb97d4d11d81f8.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125841.html?utml=xinren2016" target="_blank" class="phone-name text-over">Divoom Tivoo像素蓝牙音箱</a>
            <a href="http://www.okhqb.com/item/1000125841.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>316</span><a href="http://www.okhqb.com/item/1000125841.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125682.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img15.hqbcdn.com/product/1e/03/1e03c3873929334faaa3edf7e0669d68.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125682.html?utml=xinren2016" target="_blank" class="phone-name text-over">小米 AI音箱</a>
            <a href="http://www.okhqb.com/item/1000125682.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>359</span><a href="http://www.okhqb.com/item/1000125682.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000126344.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img13.hqbcdn.com/product/57/f5/57f575de4e24c05a65ba7bb0106a5acc.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000126344.html?utml=xinren2016" target="_blank" class="phone-name text-over">JBL FLIP4 音乐万花筒4</a>
            <a href="http://www.okhqb.com/item/1000126344.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>799</span><a href="http://www.okhqb.com/item/1000126344.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125906.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img14.hqbcdn.com/product/b9/e8/b9e8dc4979a59042be58fa002b14112e.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125906.html?utml=xinren2016" target="_blank" class="phone-name text-over">小米手环3代</a>
            <a href="http://www.okhqb.com/item/1000125906.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>168</span><a href="http://www.okhqb.com/item/1000125906.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125579.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img13.hqbcdn.com/product/f5/50/f550d230a432db69a7a9820347b9889e.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125579.html?utml=xinren2016" target="_blank" class="phone-name text-over">任天堂 switch NS</a>
            <a href="http://www.okhqb.com/item/1000125579.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>2368</span><a href="http://www.okhqb.com/item/1000125579.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000125644.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img1.hqbcdn.com/product/8d/eb/8deb7250e28ac0dcbcd83c234c9f2f64.250.png" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000125644.html?utml=xinren2016" target="_blank" class="phone-name text-over">Apple iPad 2018新款</a>
            <a href="http://www.okhqb.com/item/1000125644.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>3050</span><a href="http://www.okhqb.com/item/1000125644.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000126336.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img5.hqbcdn.com/product/df/fd/dffd1603758e9845e84cf0e786d758c7.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000126336.html?utml=xinren2016" target="_blank" class="phone-name text-over">霸王小子 迷你怀旧掌机</a>
            <a href="http://www.okhqb.com/item/1000126336.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>86</span><a href="http://www.okhqb.com/item/1000126336.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
            <li class="phone-box">
            <a href="http://www.okhqb.com/item/1000122419.html?utml=xinren2016" target="_blank" class="phone-img">
                <img width="250" height="250" class='lazy' src="static/picture/lazy.png" data-original="http://img12.hqbcdn.com/product/3c/d9/3cd95a342c43af4cbe1182f77e2d90e2.250.jpg" alt="">
            </a>
            <a href="http://www.okhqb.com/item/1000122419.html?utml=xinren2016" target="_blank" class="phone-name text-over">magic mouse2</a>
            <a href="http://www.okhqb.com/item/1000122419.html?utml=xinren2016" target="_blank" class="phone-info text-over"></a>
            <p class="phone-buy"><span class="phone-price"><span class="phone-syb">¥</span>499</span><a href="http://www.okhqb.com/item/1000122419.html?utml=xinren2016" target="_blank" class="phone-btn font-color1">立即购买</a></p>
        </li>
    </ul>
<a href="#" class="bottom-top"></a>
</div>
<a href="#" class="top"></a>
</div>
</div>
<div class="hold"></div>
<div class="position">
    <div class="pop">
        <div class="close"></div>
        <div class="pop-content">
        </div>
    </div>
    <div class="aui_content1" style="padding: 0px;">
        <div id="verifyPhone">
            <div class="verifyClose">&times;</div>
            <div class="OKHQB_logo1"></div>
            <h3>还差一步，就能领券啦！</h3>
            <ul class="verify_bd1">
                <li><input type="text" placeholder="请输入手机号" id="phoneNum">
                    <a href="javascript:;" id="sendVeriCode" class="_active1">发送验证码</a>
                    <p class="_iptTip"></p>
                </li>
                <li><input type="text" placeholder="验证码" id="veriCode">
                    <em class="veri_tip"></em>
                    <p class="time_down">没收到短信？<b>60</b>秒后<a href="javascript:;" class="resend_btn1" id="sendCodeAgain">重新发送</a></p>
                </li>
                <li>
                    <a href="javascript:;" id="VerifyAndGetCoupon" class="_active1" data-vali-type="mobile">领券</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
$(function(){
    var newPeopleGift = {
        init:function(){
            this.loadImg();
            this.bindClick();
        },
        loadImg:function(){
            $('.lazy').lazyload({
                time:250,
                effect:'fadeIn'
            });
        },
        bindClick:function(){
            $('.verifyClose').click(function(){
                $('.hold').hide();
                $('.position').hide();
                setTimeout(function(){
                    $('.aui_content1').hide();
                });
            });
            $('#getTicket').click(function(){
                var id = $(this).attr('data-id');
                newPeopleGift.getCoups(id);
            });
            $('.guide-title li').click(function(e){

                var $this = $(this),
                    i = $this.index();


                $('.checkList1, .checkList2, .checkList3, .checkList4').hide();

                $('.nav-tap').each(function(index){
                    $(this).removeClass('check'+(index+1));

                });
                $('.nav-tap').eq(i).addClass('check'+(i+1));
                $('.checkList'+(i+1)).show();
                $('.checkList'+(i+1)).find('img').trigger('appear');

            });



            $('.close').click(function(){
                $('.hold').hide();
                $('.position').hide();
                $('.pop').hide();
            });
            $('.pop-content').on('click','#goBuy',function(){
                $('.hold').hide();
                $('.position').hide();
            }).on('click','#share',function(){
                newPeopleGift.share();
                setTimeout(function(){
                    $('.hold').hide();
                    $('.position').hide();
                },100)
            });
        },
        //验证手机号码
        verifyCode:function(){
            $('.hold').show();
            $('.position').show();
            $('.aui_content1').show();
            placeHolderSupport();
            sendveriCode();
            //placeholder 兼容性
            function placeHolderSupport(){
                var supported = ('placeholder' in document.createElement('input'));
                if(!supported){
                    $('input[type="text"]').each(function(){
                        var $self = $(this),
                            _default = $self.attr('placeholder');

                        $self.val(_default);
                        $self.on({
                            focus:function(){
                                if( $.trim($self.val())===_default){
                                    $self.val('');
                                }
                            },
                            blur:function(){
                                if($.trim($self.val())===''){
                                    $self.val(_default);
                                }
                            }
                        });
                    });
                }
            }
            //校验手机号
            function checkMob($obj) {
                var _mobReg = /^1[3|4|5|7|8]\d{9}$/,
                    _mobNum = $.trim($obj.val());
                return _mobReg.test( _mobNum );
            }

            // 记录电话号码
            function submitTel(){
                var _v = $.trim($('#veriCode').val());
                if(!_v){
                    $('#veriCode').siblings('.veri_tip').html('请输入验证码!');
                }else{
                    $.ajax({
                        url : 'http://my.okhqb.com/my/validateMobileBindMsg.json?randCode='+_v,
                        dataType : "jsonp",
                        jsonp: 'callback',
                        success: function(d){
                            if(d.code == 200){
                                var id = $(this).attr('data-id');
                                $('.aui_content1').hide();
                                setTimeout(function(){
                                    newPeopleGift.getCoups(id);
                                },50)
                            }else{
                                $('#veriCode').siblings('.veri_tip').html(d.msg).show();
                            }
                        }
                    });
                }
            }
            //发送手机号,接收校验码
            function sendtel(obj){
                var _v = $.trim(obj.val());
                $.ajax({
                    url : 'http://my.okhqb.com/my/sendMobileBindMsg.json?tel='+_v,
                    dataType : "jsonp",
                    jsonp: 'callback',
                    success: function(d){
                        if(d.code === 200){
                            $('#sendVeriCode').addClass('disabled');
                            $('.time_down').show();
                            countLtime();
                        }
                        else if (d.code === 500) {
                            $('._iptTip').html(d.msg).show();
                        }
                        else {
                            $('._iptTip').html(d.msg).show();
                        }

                    }
                });
            }
            //发送验证码
            function sendveriCode() {
                var $phoneNum = $('#phoneNum'),
                    $tip = $phoneNum.siblings('._iptTip');
                $('#phoneNum').on({
                    focus : function(){
                        $(this).siblings('._iptTip').hide();
                        $('#sendVeriCode').removeClass('disabled');
                    },
                    keyup : function() {
                        var _self = $(this),
                            _val = $.trim(_self.val());
                        if( _val.length > 10){
                            if(checkMob( _self )){
                                $('#sendVeriCode').removeClass('disabled');
                            }
                        }
                    }
                });
                $('#sendVeriCode').on('click',function(){
                    if($(this).hasClass('disabled')){
                        return false ;
                    }
                    if(!checkMob($phoneNum)) {
                        $tip.html('手机号格式有误！').slideDown();
                        $(this).addClass('disabled');
                        return false;
                    }else{
                        $(this).addClass('disabled');
                        sendtel($phoneNum);
                    }
                });
                $('#VerifyAndGetCoupon').click(function(){
                    submitTel();
                });
            }
            //计算超时
            function countLtime(){
                var time = 60,
                    _ct = null;
                _ct = setInterval(function(){
                    time--;
                    $('.time_down b').html(time);
                    if(time == 0){
                        clearInterval(_ct);
                        //重新发送
                        $('#sendCodeAgain').click(function() {
                            var $phoneNum = $('#phoneNum');
                            sendtel($phoneNum);
                        });
                    }
                },1000);
            }
        },
        //分享
        share:function() {
            (function (s, d, e) {
                try {
                } catch (e) {
                }
                var f = 'http://v.t.sina.com.cn/share/share.php?', u = d.location.href, p = ['url=', e(u), '&title=', e('老板太任性！一言不合就发钱！我已近抢到180元大红包啦！你还在等什么！'), '&appkey=2924220432',  e('')].join('');

                function a() {
                    if (!window.open([f, p].join(''), 'mb', ['toolbar=0,status=0,resizable=1,width=620,height=450,left=', (s.width - 620) / 2, ',top=', (s.height - 450) / 2].join(''))){u.href = [f, p].join('')};
                }
                if (/Firefox/.test(navigator.userAgent)) {
                    setTimeout(a, 0)
                } else {
                    a()
                }
            })(screen, document, encodeURIComponent);
        },
        //优惠券
        getCoups: function(couponId){
            var _isLogin = OKHQB_sign.isSignIn();
            if (!_isLogin) {
                OKHQB_sign.dialog({
                    sign_in_callback: function () {
                        window.location.href = window.location.href;
                    }
                });
            } else {
                $.ajax({
                    url: "http://my.okhqb.com/my/registCoupons.json",
                    data: {
                        'couponId': couponId
                    },
                    type: "GET",
                    dataType: 'jsonp',
                    jsonp: 'callback',
                    success: function (data) {
                        if (data.code == 200) {
                            $('.hold').show();
                            $('.position').show();
                            $('.pop').show();
                            $('.aui_content1').hide();
                            setTimeout(function () {
                                $('.pop-content').html('<p class="pop-title">恭喜大人</p>' +
                                '<p class="pop-info"><span>80</span>元礼包已收入囊中，首购再送<span>100</span>大元哦！</p>' +
                                '<a href="http://my.okhqb.com/my/coupons.html" target="_blank" class="pop-btn">查看我的优惠券</a>' +
                                '<a href="#go-buy" id="goBuy" class="pop-btn">去逛逛</a>')
                            }, 100)
                        }
                        else if (data.code == 590) {
                            OKHQB_sign.dialog({
                                sign_in_callback: function () {
                                    window.location.href = window.location.href;
                                }
                            });
                        }
                        else if (data.code == 119054) {
                            newPeopleGift.verifyCode();
                        }
                        else if (data.code == 119034) {
                            $('.hold').show();
                            $('.position').show();
                            $('.pop').show();
                            $('.aui_content1').hide();
                            setTimeout(function () {
                                $('.pop-content').html('<p class="pop-title">启禀大人</p>' +
                                '<p class="pop-info">您已领取过新人礼包，好东西要跟好朋友共享哟！</p>' +
                                '<a href="JavaScript:;" id="share" class="pop-btn">马上分享</a>' +
                                '<a href="#go-buy" id="goBuy" class="pop-btn">不分享，马上购</a>')
                            }, 100)
                        }else{
                            artDialog({
                                title:'系统提示',
                                content: data.msg
                            });
                        }
                    }
                });
            }
        }
    };
    newPeopleGift.init();
});

</script>
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
<script src="static/js/9db4bf4823a94f8c88730de6178e0eb9.js" type="text/javascript"></script>
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
<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="static/picture/1cb20ad66fd7494092e453ef52f970fe.gif"/></div></noscript>
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

<script type="text/javascript" src="static/js/f016dd0f860d48ecaf4bacf9e449adb2.js"></script>
<script src="static/js/entrance.js" class="zhiCustomBtn" id="zhichiScript" data-args="属性名1=属性值1&属性名2=属性值2"></script></body>
</html>
@endsection
@section("title","优惠页")