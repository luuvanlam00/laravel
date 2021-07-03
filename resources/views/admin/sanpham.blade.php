@extends('admin.quantri')
@section('main')
    <script>
        function xoa() {

            var con = confirm("Bạn có muốn xóa không!");
            return con;
        }

    </script>
    <style>
        th,
        td {
            text-align: center;
        }

    </style>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h1>Quản lý sản phẩm</h1>
                    <td><a href="{{ asset('admin/product/them') }}"><button type="button" class="btn btn-primary ">Thêm
                                mới</button></a></td>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Giá khuyến mãi</th>
                                <th>Loại sản phẩm</th>
                                <th>Nhà cung cấp</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                
                            
                            <tr>
                                
                                <td>{{$item->masp}}</td>
                                <td>{{$item->tensp}}</td>
                                <td><img height="120px"
                                        src="anh/{{$item->anh}}" /></td>
                                <td>{{number_format($item->giaban,0,',','.')  }}</td>
                                <td>{{number_format($item->giakm,0,',','.')  }}</td>
                                <td>{{$item->tenloai}}</td>
                                <td>{{$item->tenncc}}</td>
                                <td><a
                                        href="{{ asset('admin/product/sua/'.$item->masp) }}"><button
                                            type="button" class="btn btn-primary btn-sm">Sửa</button></a></td>
                                <td><a onclick="return xoa();"
                                        href="{{ asset('admin/product/xoa/'.$item->masp) }}"><button
                                            type="button" class="btn btn-primary btn-sm">Xóa</button></a></td>

                            </tr>
                            @endforeach
                          
                        </tbody>
                    </table>

                </div>
                <div class="btn-group" style="float: right;">
                    <ul>
                        
                   {{$list->links()}}

                    </ul>

                </div>

            </div>
        </div>

    </div>
@endsection
