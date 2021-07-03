@extends('admin.quantri')
@section('main')
  
  <script>

      function xoa(){

        var con =confirm("Bạn có muốn xóa không!");
        return con;
      }
  </script>  
    <style>
    th,td{
        text-align: center;
    }
</style>

    <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h1>Quản lý hóa đơn </h1>
                          
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
                                <thead >
                                <tr>
                                    <th >ID</th>
                                    <th >Ngày bán </th>
                                    <th >Tên khách hàng</th>
                                    <th >Địa chỉ</th>
                                    <th >Trạng thái</th>
                                    <th >Sửa</th>
                                    <th >Xóa</th>
                                    <th >Chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                   @foreach ($list as $item)
                                       
                                 
                                    <td>{{$item->id_hd}}</td>
                                    <td>{{$item->thoigian}}</td>
                                    <td>{{$item->tenkh}}</td>
                                    <td>{{$item->diachi}}</td>
                                    <td>{{$item->trangthai}}</td>
                                  
                                    <td><a   href="{{ asset('admin/hoadon/sua/'.$item->id_hd) }}"><button type="button" class="btn btn-primary btn-sm">Sửa</button></a></td>
                                    <td><a onclick="return xoa();" href="{{ asset('admin/hoadon/xoa/'.$item->id_hd) }}"><button type="button" class="btn btn-primary btn-sm">Xóa</button></a></td>
                                    <td><a   href="{{ asset('admin/hoadon/chitiet/'.$item->id_hd) }}"><button type="button" class="btn btn-primary btn-sm">Chi tiết</button></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="btn-group" style="float: right;">
                                    <ul>
                                  {{ $list->links() }}

                                    </ul>
                               
            </div>
           
                    </div>
                </div>

            </div>
        

@endsection