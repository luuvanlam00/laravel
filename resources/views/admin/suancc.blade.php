@extends('admin.quantri')
@section('main')

    <div class="ibox-content">
        <h1>Sửa nhà cung cấp</h1>
        <form method="post" class="form-horizontal">
            <div class="form-group"><label class="col-sm-2 control-label">Tên nhà cung cấp</label>
             
                <div class="col-sm-10"><input type="text" class="form-control" name="ten"
                        value="{{$list->tenncc}}" /></div>
               
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
