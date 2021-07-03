@extends('admin.quantri')
@section('main')
                <div class="ibox-content">
                                <h1>Thêm mới sản phẩm</h1>
                            <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group"><label class="col-sm-2 control-label">Tên sản phẩm</label>

                                    <div class="col-sm-10"><input type="text" required="" class="form-control"  name="ten"/></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Ảnh sản phẩm</label>

                                <div class="col-sm-10"><input type="file"  class="form-control"  name="anh"/></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Mô tả</label>

                                <div class="col-sm-10"><textarea   require="" class="form-control"  name="mota"> </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                             
                                  <div class="form-group"><label class="col-sm-2 control-label">Chi tiết</label>

                                    <div class="col-sm-10"><textarea required="" class="form-control"  name="chitiet"></textarea></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Giá bán </label>

                                <div class="col-sm-10"><input type="text" required="" class="form-control"  name="giaban"/></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Giá khuyến mại</label>

                                <div class="col-sm-10"><input type="text" required="" class="form-control"  name="giakm"/></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Loại sản phẩm</label>

                                <div class="col-sm-10"><select class="form-control m-b" name="maloai">
                                   @foreach ($dm as $item)
                                   <option value="{{$item->maloai}}">{{$item->tenloai}}</option>
                                   @endforeach
                                   
                                    
                                  
                                </select>
                                </div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Nhà cung cấp</label>
                                <div class="col-sm-10"><select class="form-control m-b" name="mancc">
                                   
                                    @foreach ($ncc as $item)
                                    <option value="{{$item->mancc}}">{{$item->tenncc}}</option>
                                    @endforeach
                                   
                                </select>
                                </div>
                                </div>
                             
                             
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit" name="them">Thêm mới</button>
                                    
                                        
                                    </div>
                                </div>
                                {{ csrf_field() }}
                            </form>
                        </div>
@endsection