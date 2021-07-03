@extends('admin.quantri')
@section('main')
    <div class="ibox-content">
        <h1>Sửa bình luận</h1>
        <form method="post" class="form-horizontal">
          


                <div class="form-group"><label class="col-sm-2 control-label">Tên </label>
                    <div class="col-sm-10"><input type="text" class="form-control" name="ten" value="{{$list->ten }}"
                            readonly /></div>
                    <label class="col-sm-2 control-label">Nội dung </label>
                    <div class="col-sm-10"><textarea class="form-control" name="nd">{{ $list->noidung }}</textarea></div>
                    <label class="col-sm-2 control-label">Ngày bình luận </label>
                    <div class="col-sm-10"><input type="date" class="form-control" name="date" value="{{ $list->ngay }}"
                            readonly /></div>

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
