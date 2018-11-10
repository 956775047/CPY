@extends("Home.HomePublic.homepublic")
@section("admin")
<style type="text/css">
        .mod-t .today{margin:0 auto;width:128px;height:63px;background: url(/static/homes/static/images/jrjx_2.png) 0 bottom;}
</style>
<link rel="stylesheet" type="text/css" href="/static/homes/static/css/9144ce188dc34d5496b36f952d3e2118.css"/>
    <link rel="stylesheet" href="/static/homes/static/css/okindex_2.css"/>
    <script type="text/javascript" src="/static/homes/static/js/6c592beded1643108f78c4a33a032e33.js"></script>
    <script type="text/javascript" src="/static/homes/static/js/a6eeaad17d124ebda4e3afc9872d44cf.js"></script>
<div class="ok-slide">
      <div class="ok-slide-bd">
      <ul class="slides_container">
      <li><a target="_blank" href="http://www.okhqb.com/item/1000125688.html?utml=hwsj_01_0831" style="height:360px;background: url(/static/homes/static/images/e54eb0e4830df9c29174f59e7ce8762d_1.jpg) no-repeat center center;"></a></li>
      <li><a target="_blank" href="http://www.okhqb.com/item/1000126414.html?utml=hwsj_02_0831" style="height:360px;background: url(/static/homes/static/images/16a66649404b57cd7e59c25421899e3a_1.jpg) no-repeat center center;"></a></li>
      <li><a target="_blank" href="http://www.okhqb.com/item/1000125145.html?utml=hwsj_03_0831" style="height:360px;background: url(/static/homes/static/images/1236c3037fe4bc2f91ac39deda894776_1.jpg) no-repeat center center;"></a></li>
      <li><a target="_blank" href="http://www.okhqb.com/item/1000126480.html?utml=hwsj_04_0831" style="height:360px;background: url(/static/homes/static/images/536aed456847fe20aef41b4d45196fdc_1.jpg) no-repeat center center;"></a></li></ul>
      </div>
      </div>

      <!-- 今日限购 -->
<div class="w-1200" id="sec1">
    <div class="mod-t"><h1 class="today"></h1></div>
    <ul class="cfix td-list">
         @foreach($data as $row)
                    <li class="bd cfix">
                <div class="sale-img fl">
                    <a href="/goods/{{$row->id}}" target="_blank"><img width="306" height="276" src="{{$row->pic}}" alt=""/></a>
                                    </div>

                <div class="sale-info fr">
                    <h2 class="sale-time" data-time="17941"><i></i>商品剩余时间<p class="sp-iblock"><span></span>0<span>0</span>0<span>0</span>0<span>0</span>0<span>0</span>0<span>0</span></p></h2>
                    <a href="/goods/{{$row->id}}" target="_blank" class="sp-block link1">{{$row->name}}</a>
                    <a href="/goods/{{$row->id}}" target="_blank" class="sp-block link2">{{$row->news}}</a>
                    <div class="td-price">
                        特惠价:&yen; <i>{{ceil($row->price*$row->d_price*0.1)}}</i>
                        <a href="/goods/{{$row->id}}" target="_blank" class="sp-iblock sp-buy fr">立即购买</a>
                    </div>
                    <div class="sp-info cfix">
                        <div class="info1 fl">
                            <p>市场价</p>
                            <p>&yen;{{$row->price}}</p>
                        </div>
                        <div class="info2 fl">
                            <p>折扣</p>
                            <p>{{$row->d_price}}折</p>
                        </div>
                        <div class="info3 fl">
                            <p>已节省</p>
                            <p>&yen;{{$row->price-ceil($row->price*$row->d_price*0.1)}}</p>
                        </div>
                        <div class="info4 fr">
                            <p class="buy-num" style="font-size:16px"><i></i>{{$row->num}}</p>
                            <p>已购买</p>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
            </ul>
</div>
<!-- 海淘优选 -->
<div class="w-1200" id="sec4">
    </div>
	
	
	
	
	
<!-- 国货精品 -->
<div class="w-1200" id="sec2">
<div class="mod-t cfix">
    <h2 class="fl">1F&nbsp;淘机馆</h2>
    <p>
        <span>为您推荐:</span>
            <!-- 在这里遍历 -->
                    <a href="http://www.okhqb.com/item/1000126225.html" target="_blank">小米8SE</a>
                    <a href="http://www.okhqb.com/item/1000125650.html" target="_blank">荣耀10</a>
                    <!-- |<a href="http://www.okhqb.com/item/1000126204.html" target="_blank">荣耀 Play</a>
                    |<a href="http://www.okhqb.com/item/1000126276.html" target="_blank">美图 T9</a>
                    |<a href="http://www.okhqb.com/item/1000126241.html" target="_blank">OPPO R15 梦镜版</a>
                    |<a href="http://www.okhqb.com/item/1000126301.html" target="_blank">魅族15 Plus</a>
                    |<a href="http://www.okhqb.com/item/1000126271.html" target="_blank">vivo NEX</a> -->
            <!-- 遍历结束 -->
            </p>
</div>
<!-- 商品列表 -->
<!-- <div class="mod">
    <div class="mod-list">
        <ul class="cfix">
          
            </ul>
    </div>

</div> -->
<!-- 国货精品底部列表 -->
<ul class="cfix mod-list mod-list2">
    <!-- 遍历遍历 -->
        <li>
            <div class="mod-item">
                <div class="mod-img">
                    <a href="http://www.okhqb.com/item/1000125413.html?utml=home" target="_blank">
                        <img width="160" height="160" src="/static/homes/static/picture/79f7dcc0e6f6aa883854f446ac1d51bb.160_2.jpg" alt=""/>
                    </a>
                </div>
                <div class="mod-info">
                    <p>&yen; <i>3099</i> <del>市场价:&yen;3999</del> </p>
                    <a href="http://www.okhqb.com/item/1000125413.html?utml=home" target="_blank" class="sp-block link1">Huawei/华为 Mate 10 移动联通电信4G手机 双卡双待 6GB+128GB 亮黑色</a>
                </div>
            </div>
        </li>
    <!-- 遍历结束 -->
          
</ul>
<!-- 精品小商品 -->
<div class="mod mod-3">
    <ul class="cfix mod-list3">
        <!-- 在这里遍历 -->
            <li class="cifx fl">
                <div class="mod-list3-l fl">
                    <a href="http://www.okhqb.com/item/1000126658.html?utml=home" target="_blank"><img width="80" height="80" src="/static/homes/static/picture/b6810981d9df765ae734a6e163d1e7cb_2.png" alt=""/></a>
                </div>
                <div class="mod-list3-r fr">
                    <a href="http://www.okhqb.com/item/1000126658.html?utml=home" target="_blank" class="sp-block link1">1MORE智能蓝牙耳机 </a>
                    <a href="http://www.okhqb.com/item/1000126658.html?utml=home" target="_blank" class="sp-block link2">给你无线自由 </a>
                    <p>&yen;238 </p>
                </div>
            </li>
        <!-- 遍历结束 -->
           
    </ul>
</div>
</div>
<!-- 数码发现 -->
<div class="w-1200" id="sec3">
    <div class="mod-t cfix">
        <h2 class="fl">2F&nbsp;数码发现</h2>
        <p>
            <span>为您推荐:</span>
                    <!-- 遍历 -->
                            <a href="http://www.okhqb.com/list/74.html" target="_blank">手机贴膜</a>
                            <!-- |<a href="http://www.okhqb.com/list/116.html" target="_blank">保护壳/套</a>
                            |<a href="http://www.okhqb.com/search.html?q=%E8%80%B3%E6%9C%BA" target="_blank">热销耳机</a>
                            |<a href="http://www.okhqb.com/list/245.html" target="_blank">智能家居</a>
                            |<a href="http://www.okhqb.com/list/quwan.html" target="_blank">智能玩具</a> -->
                    <!-- 结束 -->
                    </p>
    </div>



    <!-- 广告图标 -->
    <div class="digital cfix">
    <!-- 广告遍历只能两个 -->
        <div class="dig-l fl">
            <a href="http://www.okhqb.com/item/1000126533.html?utml=smfx_01" target="_blank"><img width="594" height="240" src="/static/homes/static/picture/dd212f320e0435445583187b7fe999c7_2.jpg" alt=""/></a>
        </div>
        <div class="dig-r fr">
            <a href="http://www.okhqb.com/item/1000126561.html?utml=smfx_02" target="_blank"><img width="594" height="240" src="/static/homes/static/picture/0a60b846ff5cee6c4034615e99323b17_2.jpg" alt=""/></a>
        </div>
    <!-- 遍历结束 -->
    </div>


    <!-- 商品列表 -->
    <div class="mod mod-sm">
      
        <!-- 国货精品底部列表 -->
        <ul class="cfix mod-list mod-list2">
            <li>
                <div class="mod-item">
                    <div class="mod-img">
                        <a href="http://www.okhqb.com/item/1000126549.html?utml=home" target="_blank">
                                <img width="160" height="160" src="/static/homes/static/picture/d440092744264a0aa2b8fd38bd99d471.160_2.jpg" alt=""/>
                         </a>
                    </div>
                    <div class="mod-info">
                        <p>&yen; <i>199</i> <del>市场价:&yen;199</del> </p>
                        <a href="http://www.okhqb.com/item/1000126549.html?utml=home" target="_blank" class="sp-block link1">MI/小米 声波电动牙刷 家用智能成人防水充电声波震动牙刷 白色</a>
                    </div>
                </div>
            </li>
                          
        </ul>
    </div>
	
	
	
	
	
	
	
	
</div>
</div>
@endsection
@section("title","前台首页")