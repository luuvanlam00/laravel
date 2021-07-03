@extends('admin.quantri')
@section('main')
<div class="ibox-content">
    <h1>Sửa sản phẩm</h1>
    <form method="post" class="form-horizontal" enctype="multipart/form-data" >
     
          
      
            <div class="form-group"><label class="col-sm-2 control-label">Tên sản phẩm</label>

                <div class="col-sm-10"><input type="text" required="" class="form-control" name="ten" value="{{$list->tensp}}>" /></div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Ảnh sản phẩm</label>

                <div class="col-sm-10"><input type="file" class="form-control" name="anh" id="anh"  />
                
                </div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Mô tả</label>

                <div class="col-sm-10"><textarea require="" class="form-control" name="mota">{{$list->mota}}</textarea></div>
            </div>
            <div class="hr-line-dashed"></div>

            <div class="form-group"><label class="col-sm-2 control-label">Chi tiết</label>

                <div class="col-sm-10"><textarea required="" class="form-control" name="chitiet">{{$list->chitiet}}</textarea></div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Giá bán </label>

                <div class="col-sm-10"><input type="text" required="" class="form-control" name="giaban" value="{{$list->giaban}}" /></div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Giá khuyến mại</label>

                <div class="col-sm-10"><input type="text" required="" class="form-control" name="giakm" value="{{$list->giakm}}" /></div>
            </div>
            <div class="hr-line-dashed"></div>

            <div class="form-group"><label class="col-sm-2 control-label">Loại sản phẩm</label>
                <div class="col-sm-10"><select class="form-control m-b" name="maloai">
                        @foreach ($dm as $item)
                            
                        
                            <option 
                             value="{{$item->maloai}}"@if ($list->maloai==$item->maloai)
                            selected @endif>{{$item->tenloai}}</option>
                            @endforeach
                        
                      
                    </select>
                </div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Nhà cung cấp</label>
                <div class="col-sm-10"><select class="form-control m-b" name="mancc">
                    @foreach ($ncc as $item)
                        
                   
                    <option  value="{{$item->mancc}}" @if ($list->mancc==$item->mancc)
                        selected
                    @endif>{{$item->tenncc}}</option>
                    @endforeach
                    </select>
                </div>
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