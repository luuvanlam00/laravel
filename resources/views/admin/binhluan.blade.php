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
                      <h1>Quản lý bình luận</h1>
                      
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
                              <th>Mã sản phẩm</th>
                              <th>Tên </th>
                              <th>Nội dung </th>
                              <th>Thời gian </th>
                              <th>Sửa</th>
                              <th>Xóa</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($list as $item )
                          <tr>
                             
                              <td>{{$item->id_bl}}</td>
                              <td>{{$item->masp}}</td>
                              <td>{{$item->ten}}</td>
                              <td>{{$item->noidung}}</td>
                              <td>{{$item->ngay}}</td>
                              <td><a   href="{{ asset('admin/binhluan/sua/'.$item->id_bl) }}"><button type="button" class="btn btn-primary btn-sm">Sửa</button></a></td>
                              <td><a onclick="return xoa();" href="{{ asset('admin/binhluan/xoa/'.$item->id_bl) }}"><button type="button" class="btn btn-primary btn-sm">Xóa</button></a></td>
                            
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