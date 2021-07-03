@extends('admin.quantri')
@section('main')


<div class="ibox-content">
    <h1>Sửa hóa đơn </h1>
    <form method="post" class="form-horizontal" enctype="multipart/form-data">
        
            <div class="form-group"><label class="col-sm-2 control-label">Ngày bán </label>

                <div class="col-sm-10"><input type="date" class="form-control" name="ngay" value="{{$list->thoigian}}" readonly/></div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Tên khách hàng </label>

                <div class="col-sm-10"><input type="text" required="" class="form-control" name="ten" value="{{$list->tenkh}}" readonly/></div>
            </div>

            <div class="form-group"><label class="col-sm-2 control-label">Địa chỉ</label>

                <div class="col-sm-10"><textarea require="" class="form-control" name="dc" readonly> {{$list->diachi}}</textarea></div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Trạng thái</label>

                <div class="col-sm-10"><textarea require="" class="form-control" name="tt"> {{$list->trangthai}}</textarea></div>
            </div>
      

        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-primary" type="submit" name="sua">Sửa</button>

            </div>
        </div>
        {{ csrf_field() }}
    </form>
</div>
@endsection