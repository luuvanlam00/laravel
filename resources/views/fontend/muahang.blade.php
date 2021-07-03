@extends('fontend.index')
@section('main')
<div class="container_fullwidth">
    <div class="container shopping-cart">
        <div class="row">
                <div class="col-md-12">
                    <h3 class="title">
                        Xác nhận đơn thanh toán
                    </h3>

                    <div class="clearfix">
                    </div>
                    <form id="giohang" method="post">
                        <table class="shop-table">

                            <thead>
                                <tr>
                                    <th>
                                        Tên sản phẩm
                                    </th>
                                    <th>
                                        Giá bán
                                    </th>
                                    <th>
                                        Số lượng
                                    </th>
                                    <th>
                                        Thành tiền
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($items as $item)
                                   
                              
                                    <tr>
                                        <td>

                                            <div class="productname">
                                               {{$item->name}}
                                            </div>


                                        </td>
                                        <td>
                                            <h5>
                                                {{ number_format($item->price, 0, ',', '.') }}
                                            </h5>
                                        </td>

                                        <td>
                                            <h5>

                                                {{$item->quantity}}
                                            </h5>

                                            </h5>
                                        </td>
                                        <td>
                                            <h5>  {{ number_format($item->price * $item->quantity, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        
                            
                        <tfoot>
                            <tr>

                                <td>
                                    <H5>Tổng giá trị hóa đơn:</H5>
                                </td>
                                <td colspan="2"></td>
                                <td><b><span>
                                            <h5>{{ number_format($total, 0, ',', '.') }}</h5>
                                        </span></b></td>


                            </tr>
                        </tfoot>
                        </table>
                    </form>

                    <div class="clearfix">
                    </div>


                </div>
        </div>
     
        <div class="clearfix">
        </div>
        <div id="custom-form" class="col-md-6 col-sm-8 col-xs-12" style="margin-top: 20px;">
            <form method="post">
                <div class="form-group">
                    <label>
                        <h6>Tên khách hàng</h6>
                    </label>
                    <input required type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>
                        <h6>Địa chỉ Email</h6>
                    </label>
                    <input required type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>
                        <h6>Số điện thoại</h6>
                    </label>
                    <input required type="text" class="form-control" name="sdt">
                </div>
                <div class="form-group">
                    <label>
                        <h6>Địa chỉ nhận hàng</h6>
                    </label>
                    <input required type="text" class="form-control" name="dc">
                </div>
                <button class="btn btn-info" name="submit">Mua hàng</button>
                {{ csrf_field() }}
            </form>
        </div>

    </div>

</div>
@endsection