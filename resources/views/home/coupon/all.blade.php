@include('layouts._daohang')
<link href="/coupons/style.css" rel="stylesheet" type="text/css"/>
<div id="iframe-wrap" style="padding:10px 100px 10px;">
  <div class="aui-tab" data-ydui-tab style="background: #e0e0e0;">
                  <div class="tab-panel">
                      <div class="tab-panel-item tab-active">
                          <div class="tab-item" style="padding:10px">
                              @foreach($coupon as $v)
                                <a href="javascript:;" class="aui-flex aui-vou-content">
                                    <div class="aui-flex-box">
                                        <div class="aui-flex">
                                            <div class="aui-flex-cp-img">
                                                <img src="/coupons/img/timg.jpg" alt="">
                                            </div>
                                            <div class="aui-flex-box">
                                                <h2>全场满{{$v['max']}}-{{$v['min']}}元优惠券</h2>
                                                <p>
                                                    <i>￥</i>
                                                    {{$v['min']}}<em>满{{$v['max']}}可使用</em>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aui-vou-button">

                                        <div class="aui-Speed">
                                            <p>剩余{{$v['counts']}}张优惠券</p>
                                            @if(in_array($v['id'],$coupon_user))
                                            <span class="aui-received"></span>
                                          </div>
                                            @else
                                              </div>
                                              @if($v['counts'] ==0)
                                                  <button class="aui-vou-btn-der aui-vou-btn-der-one">抢完了</button>
                                              @else
                                                <button class="aui-vou-btn-der aui-vou-btn-der-one" id="lq{{$v['id']}}">立即领取</button>
                                              @endif
                                        @endif
                                  </div>
                                        <script src="/js/jquery.min.js"></script>
                                        <script>
                                          $('#lq{{$v['id']}}').click(function(){
                                              location.href ="/coupon/gai/{{$v['id']}}&{{\Session::get('id')}}";
                                          })
                                        </script>
                                </a>
                                @endforeach
                          </div>
                      </div>
                  </div>
              </div>
</div>
@include('layouts._foot')
