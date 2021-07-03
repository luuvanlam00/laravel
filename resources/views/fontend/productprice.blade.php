@extends('fontend.index')
@section('main')
    <div class="container_fullwidth">
        <div class="container">
            <div lass="row">
                <div class="col-md-3">
                    <div class="category leftbar">
                        <h3 class="title">
                            Danh mục
                        </h3>
                        <ul>
                            @foreach ($cate as $item)


                                <li>
                                    <a href="{{ asset('search/'.$item->maloai) }}">
                                        {{ $item->tenloai }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="category leftbar" >
                        <h3 class="title">
                            Tìm kiếm theo giá
                        </h3>
                        <ul>
                            <li>
                                <a href="{{ asset('searchprice/1') }}" style="color: red;" >
                                    Giá tăng dần
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('searchprice/2') }}" style="color: red;">
                                    Giá giảm dần
                                </a>
                            </li>

                            <li>
                                <a href="{{ asset('searchprice/3') }}" style="color: red;">
                                    Dưới 5 triệu
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('searchprice/4') }}" style="color: red;">
                                    5 triệu - 10 triệu
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('searchprice/5') }}" style="color: red;">
                                    10 triệu - 20 triệu
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('searchprice/6') }}" style="color: red;">
                                    Trên 20 triệu
                                </a>
                            </li>


                        </ul>
                    </div>

                    <div class="clearfix">
                    </div>
                    <div class="leftbanner">
                        <img src="images/26.jpg" alt="">
                    </div>

                    <div class="leftbanner">
                        <img src="images/28.jpg" alt="">
                    </div>
                    <div class="leftbanner">
                        <img src="images/29.jpg" alt="">
                    </div>
                    <div class="leftbanner">
                        <img src="images/30.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="banner">
                        <div class="bannerslide" id="bannerslide">
                            <ul class="slides">
                                <li>
                                    <a href="#">
                                        <img src="images/50.jpg" alt="" style="height: 180px; width: 100%;" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/25.jpg" alt="" style="height: 180px; width: 100%;" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="products-grid">
                        <div class="toolbar">
                            <div class="row">
                                @foreach ($list as $item)


                                    <div class="col-md-4 col-sm-6">

                                        <div class="products">
                                            <div class="offer">-{{ceil( (($item->giaban - $item->giakm)  * 100 / $item->giaban ))}}  %</div>
                                            <div class="thumbnail">
                                                <a
                                                    href="{{ asset('detail/'.$item->masp) }}">
                                                    <img src="../backend/anh/{{$item->anh}}"
                                                        alt="Product Name" width="230px" height="280px">
                                                </a>
                                            </div>
                                            <div class="productname">
                                              {{$item->tensp}}
                                            </div>
                                            <h4 class="price">@if ($item->giakm>0)
                                              {{number_format($item->giakm,0,',','.')}}
                                                 @else
                                                 {{number_format($item->giaban,0,',','.')}}
                                             @endif
                                                 VND</h4>
                                            <div class="button_group">
                                                <a class="button add-cart"
                                                    href="{{ asset('detail/'.$item->masp) }}">
                                                    Đặt mua
                                                </a>
                                             
                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                            </div>


                        </div>

                    </div>

                </div>
                <div id="pagination" style="float: right;">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                          {{$list->links()}}
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </div>
@endsection
