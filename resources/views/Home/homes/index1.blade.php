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