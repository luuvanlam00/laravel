@extends('fontend.index')
@section('main')
<script>
  function update(quantity, id){
      $.get(
          '{{ asset('cart/update') }}', {
              id: id,
              quantity: quantity
          },
          function() {
              location.reload();
          }

      );
  }

</script>
    <div class="container_fullwidth">

        <div class="container shopping-cart">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title">
                        Giỏ hàng
                    </h3>

                    <div class="clearfix">
                    </div>
                    <form id="giohang" method="post">
                        @if ($items->count() >= 1)


                            <table class="shop-table">

                                <thead>
                                    <tr>
                                        <th>
                                            Ảnh
                                        </th>
                                        <th>
                                            Chi tiết
                                        </th>
                                        <th>
                                            Giá bán
                                        </th>
                                        <th>
                                            Số lượng
                                        </th>
                                        <th>
                                            Tổng tiền
                                        </th>
                                        <th>
                                            Xóa
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)


                                        <tr>
                                            <td>
                                                <img src="../backend/anh/{{ $item->attributes->img }}" alt="">
                                            </td>
                                            <td>
                                                <div class="shop-details">
                                                    <div class="productname">
                                                        {{ $item->name }}
                                                    </div>
                                                    <p>

                                                        <a class="review_num" href="#">
                                                            {{ $item->attributes->chitiet }}
                                                        </a>
                                                    </p>

                                                    <p>
                                                        Mã sản phẩm :
                                                        <strong class="pcode">
                                                            {{ $item->id }}
                                                        </strong>
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>
                                                    {{ number_format($item->price, 0, ',', '.') }}
                                                </h5>
                                            </td>
                                            <td>
                                                <input class="form-control" type="number" value="{{ $item->quantity }}"
                                                    onchange="update(this.value,'{{ $item->id }}')" width="80px">
                                            </td>
                                            <td>
                                                <h5>
                                                    <strong class="red">
                                                        {{ number_format($item->price * $item->quantity, 0, ',', '.') }}
                                                </h5>
                                                </strong>
                                                </h5>
                                            </td>
                                            <td>

                                                <a href="{{ asset('cart/delete/' . $item->id) }}">
                                                    <img src="images/remove.png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="6">

                                            <button>
                                                <a href="{{ asset('') }}">Tiếp tục mua hàng</a>
                                            </button>


                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            
                    </form>
                    <div class="row">
                        <div class="col-md-4 col-sm-6" style="float: right;">
                            <div class="shippingbox">

                                <div class="grandtotal">
                                    <h5>
                                        Tổng tiền
                                    </h5>
                                    <span>
                                        {{ number_format($total, 0, ',', '.') }}
                                    </span>
                                </div>
                                <button style="margin-left: 50px;">
                                    <a href="{{ asset('cart/muahang') }}">Thanh toán</a>
                                </button>
                            </div>
                        </div>
                        
                    </div>
                    @else


                    <h3>Không có sản phẩm trong giỏ hảng!</h3>
                    <a href="{{ asset('product') }}"><button type="button" class="btn btn-primary btn-sm">Quay lại mua
                            hàng</button></a>
                    @endif
                    <div class="clearfix">
                    </div>


                </div>

            </div>
            <div class="clearfix">
            </div>
          
        </div>
   
    </div>
  
@endsection
