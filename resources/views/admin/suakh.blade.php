@extends('admin.quantri')
@section('main')
    <div class="ibox-content">
        <h1>Sửa khách hàng</h1>
        <form method="post" class="form-horizontal">
        <div class="form-group"><label class="col-sm-2 control-label">Tên khách hàng</label>

            <div class="col-sm-10"><input type="text" class="form-control" name="ten" value="{{ $list->tenkh }}" /></div>


        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Email</label>


            <div class="col-sm-10"><input type="email" class="form-control" name="email" value="{{ $list->email }}" />
            </div>


        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Số điện thoại</label>


            <div class="col-sm-10"><input type="text" class="form-control" name="sdt" value="{{ $list->sdt }}" /></div>

        </div>
        <div class="hr-line-dashed"></div>


        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-primary" type="submit" name="sua">Sửa</button>


            </div>
        </div>

        {{ csrf_field() }}
        </form>
    </div>
@endsection
