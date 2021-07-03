@extends('fontend.index')
@section('main')
<style>
  #comment {
    padding: 15px 0;
  }

  #comment h3 {
    font-size: 15px;
    font-weight: bold;
    color: #000;
    text-transform: capitalize;
    margin: 0 0 15px 0;
  }

  #comment input,
  #comment textarea {
    border-radius: 0;
  }

  #comment textarea {
    height: 250px;
  }

  #comments {
    padding: 15px 0;
  }

  #comments ul {
    border-bottom: 1px dotted #ccc;
  }

  #comments ul li {
    list-style: none;
  }

  #comments ul li.comm-name {
    font-weight: bold;
    color: #000;
  }

  #comments ul li.comm-details {
    line-height: 18px;
    padding: 10px 0;
  }
</style>
<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="products-details">
          <div class="preview_image">
            <div class="preview-small">
             
                  
             
                <img id="zoom_03" src="../backend/anh/{{$product->anh}}" alt="">


            </div>


          </div>
          <div class="products-description">
            <h5 class="name">
              {{$product->tensp}}
            </h5>

            <p>

              <span class=" light-red">
                Tình trạng:Còn hàng
              </span>
            </p>
            <p>
              {{$product->chitiet}}
            </p>
            <hr class="border">
            <div class="price">
              Giá :
              @if ($product->giakm>0)
              <span class="new_price">
                {{number_format($product->giakm,0,',','.')}}
                <sup>
                  VND
                </sup>
              </span>
              <span class="old_price">
                {{number_format($product->giaban,0,',','.')}}
                <sup>
                  VND
                </sup>
              </span>
              @else
              <span class="new_price">
                {{number_format($product->giaban,0,',','.')}}
                <sup>
                  VND
                </sup>
              </span>
              @endif
              
            </div>

            <hr class="border">
       
            <div class="wided">
              <div class="button_group" style="float: left;">
                <a  href="{{ asset('cart/add/'.$product->masp) }}"><button class="button">Đặt mua</button>
                  
                </a>
                <button class="button compare">
                  <i class="fa fa-exchange">
                  </i>
                </button>
                <button class="button favorite">
                  <i class="fa fa-heart-o">
                  </i>
                </button>
                <button class="button favorite">
                  <i class="fa fa-envelope-o">
                  </i>
                </button>
              </div>
            </div>
     
            <div class="clearfix">
            </div>
            <hr class="border">
            <img src="images/share.png" alt="" class="pull-right">
          </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="tab-box">
          <div id="tabnav">
            <ul>
              <li>
                <a href="#Descraption">
                  Mô tả
                </a>
              </li>
            </ul>
          </div>
          <div class="tab-content-wrap">
            <div class="tab-content" id="Descraption">
              <p>
                {{$product->mota}}
              </p>

            </div>
          
       
          </div>
        </div>
        <div class="clearfix">
        </div>
        
      
        <div id="comment" class="col-md-8 col-sm-9 col-xs-12">
          <h3 style="margin-bottom: 30px;">Bình luận sản phẩm</h3>
          <form method="post" action="">
            <div class="form-group">
              <label style="margin-bottom:15px;">Tên</label>
              <input type="text" name="ten" required="" class="form-control" placeholder="Tên">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" style="margin-bottom:15px;">Nội dung</label>
              <textarea class="form-control" name="binhluan" required="" placeholder="Nội Dung"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-default">Bình luận</button>
            {{ csrf_field() }}
          </form>
        </div>
      
          <div id="comments" class="col-md-12 col-sm-12 col-xs-12">
          @foreach ($cmt as $item)
              
          
              <ul>
                <li class="comm-name">{{$item->ten}}</li>
                <li class="comm-time">{{$item->ngay}}</li>
                <li class="comm-details">
                  <p>
                    {{$item->noidung}}
                  </p>
                </li>
              </ul>
              @endforeach
        
          </div>
      
        <div id="pagination" class="col-md-12 col-sm-12 col-xs-12" style="margin-left: 790px;">
          <nav aria-label="Page navigation">
            <ul class="pagination">
            </ul>
          </nav>
        </div>
        <div class="clearfix">
        </div>
      </div>
      <div class="col-md-3">
        <div class="special-deal leftbar">
          <h4 class="title">
            Special
            <strong>
              Deals
            </strong>
          </h4>
          @foreach ($nb as $item)
          
          <div class="special-item">
           
              <div class="product-image">
                <a href="#">
                  <img src="../backend/anh/{{$item->anh}}" alt="" style="width: px; height: 60px;">
                </a>
              </div>
              <div class="product-info">
                <p>
                  {{$item->tensp}}
                </p>
                <h5 class="price">
                  {{number_format($item->giakm,0,',','.')}} VND
                </h5>
              </div>
           
          </div>
              
          @endforeach
        </div>



      </div>
    </div>
    <div class="clearfix">
    </div>

  </div>
</div>
@endsection