@extends('fontend.index')
@section('main')
<div class="hom-slider">
    <div class="container">
        <div id="sequence">

        </div>
    </div>
    <div class="promotion-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="promo-box"><img src="images/28.jpg" alt=""></div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="promo-box"><img src="images/29.jpg" alt=""></div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="promo-box"><img src="images/30.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="container_fullwidth">
    <div class="container">
        <div class="hot-products">
            <h3 class="title"><strong>Hot</strong> Products</h3>
            <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next"
                    href="#">&gt;</a></div>

            <ul id="hot">

                <li>
                    <div class="row">
                        @foreach ($list as $item)
                            
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="products">
                                <div class="offer">-{{ceil( (($item->giaban - $item->giakm)  * 100 / $item->giaban ))}}  %  </div>
                                
                                <div class="thumbnail"><a
                                        href="{{ asset('detail/'.$item->masp) }}"><img
                                            src="../backend/anh/{{$item->anh}}"
                                            alt="Product Name" width="230px" height="280px"></a></div>
                                <div class="productname">{{$item->tensp}}</div>
                                <h4 class="price">@if ($item->giakm>0)
                                 {{number_format($item->giakm,0,',','.')}}
                                    @else
                                    {{number_format($item->giaban,0,',','.')}}
                                @endif
                                    VND</h4>
                                <div class="button_group"><a class="button add-cart"
                                        href="{{ asset('detail/'.$item->masp) }}">Đặt
                                        mua</a><button class="button compare" type="button"><i
                                            class="fa fa-exchange"></i></button><button class="button wishlist"
                                        type="button"><i class="fa fa-heart-o"></i></button></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </li>

            </ul>

        </div>
        <div class="clearfix"></div>
        <div class="featured-products">
            <h3 class="title"><strong>Featured </strong> Products</h3>
            <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next"
                    href="#">&gt;</a></div>
            <ul id="featured">
                <li>
                  <div class="row">
                     @foreach ($new as $item)
                         
                     
                     <div class="col-md-3 col-sm-6">
                         <div class="products">
                             <div class="offer">-{{ceil( (($item->giaban - $item->giakm)  * 100 / $item->giaban ))}}  %</div>
                             <div class="thumbnail"><a
                                     href="{{ asset('detail/'.$item->masp) }}"><img
                                         src="../backend/anh/{{$item->anh}}"
                                         alt="Product Name" width="230px" height="280px"></a></div>
                             <div class="productname">{{$item->tensp}}</div>
                             <h4 class="price">@if ($item->giakm>0)
                              {{number_format($item->giakm,0,',','.')}}
                                 @else
                                 {{number_format($item->giaban,0,',','.')}}
                             @endif VND</h4>
                             <div class="button_group"><a class="button add-cart"
                                     href="{{ asset('detail/'.$item->masp) }}">Đặt
                                     mua</a><button class="button compare" type="button"><i
                                         class="fa fa-exchange"></i></button><button class="button wishlist"
                                     type="button"><i class="fa fa-heart-o"></i></button></div>
                         </div>
                     </div>
                     @endforeach
                 </div>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>

    </div>
</div>
@endsection