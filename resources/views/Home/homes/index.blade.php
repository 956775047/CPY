@extends("Home.HomePublic.homepublic")
@section("admin")
<style type="text/css">
        .mod-t .today{margin:0 auto;width:128px;height:63px;background: url(/static/homes/static/images/jrjx_2.png) 0 bottom;}
         .gg{
            margin-left: 85px;
        }
</style>
<link rel="stylesheet" type="text/css" href="/static/homes/static/css/9144ce188dc34d5496b36f952d3e2118.css"/>
    <link rel="stylesheet" href="/static/homes/static/css/okindex_2.css"/>
    <script type="text/javascript" src="/static/homes/static/js/6c592beded1643108f78c4a33a032e33.js"></script>
    <script type="text/javascript" src="/static/homes/static/js/a6eeaad17d124ebda4e3afc9872d44cf.js"></script>
<div class="ok-slide">
      <div class="ok-slide-bd">
      <ul class="slides_container">
        @foreach($info as $row)
      <li><a target="_blank" href="javascript:void(0)" style="height:360px;background: url({{$row->pic}}) no-repeat center center;"></a>
      </li>
        @endforeach
  </ul>
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
    @foreach($goods as $row)
        <li>
            <div class="mod-item">
                <div class="mod-img">
                    <a href="/goods/{{$row->id}}" target="_blank">
                        <img width="160" height="160" src="{{$row->pic}}" alt=""/>
                    </a>
                </div>
                <div class="mod-info">


                    <p>&yen; <i>{{$row->price}}</i> <del>市场价:&yen;3999</del> </p>
                    <a href="/goods/{{$row->id}}">{{$row->descr}}</a>
                    
                </div>
            </div>
        </li>
        @endforeach
    <!-- 遍历结束 -->
          
</ul>
<!-- 精品小商品 -->
<div class="mod mod-3">
    
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
    @foreach($ad as $a)
        <div class="dig-l fl">
            <a href="javascript:void(0)" target="_blank"><img width="594" height="240" src="{{$a->pic}}" alt=""/></a>
        </div>


        @endforeach
    <!-- 遍历结束 -->
    </div>


    <!-- 商品列表 -->
    <div class="mod mod-sm">
      
        <!-- 国货精品底部列表 -->
         <ul class="cfix mod-list mod-list2">
  @foreach($good as $yy)      
            <li>
                <div class="mod-item">
                    <div class="mod-img">
                        <a href="/goods/{{$yy->id}}" target="_blank">
                                <img width="160" height="160" src="{{$yy->pic}}" alt=""/>
                         </a>
                    </div>
                    <div class="mod-info">
                        <p>&yen; <i>{{$yy->price}}</i> <del>市场价:&yen;199</del> </p>
                        <a href="/goods/{{$yy->id}}" target="_blank" class="sp-block link1">{{$yy->name}}</a>
                    </div>
                </div>
            </li>
 @endforeach                         
        </ul>
    </div>
	
<div class="gg">
                <h2>公告</h2>
               @foreach($dat as $row)
                <a href="/annource"><b>{{$row->title}}</b></a><br>
                @endforeach
</div>
</div>
</div>
@endsection
@section("title","前台首页")