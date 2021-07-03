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
                      <h1>Quản lý khách hàng</h1>
                      <td><a href="{{ asset('admin/khachhang/them') }}"><button type="button" class="btn btn-primary ">Thêm mới</button></a></td>
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
                              <th>Tên khách hàng</th>
                              <th>Email</th>
                              <th>Số điện thoại</th>
                              <th>Sửa</th>
                              <th>Xóa</th>
                          </tr>
                          </thead>
                          <tbody>
                              @foreach ($list as $item)
                                  
                              
                          <tr>
                             
                              <td>{{$item->id_kh}}</td>
                              <td>{{$item->tenkh}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->sdt}}</td>
                              <td><a   href="{{ asset('admin/khachhang/sua/'.$item->id_kh) }}"><button type="button" class="btn btn-primary btn-sm">Sửa</button></a></td>
                              <td><a onclick="return xoa();" href="{{ asset('admin/khachhang/xoa/'.$item->id_kh) }}"><button type="button" class="btn btn-primary btn-sm">Xóa</button></a></td>
                            
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

