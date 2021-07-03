@extends('admin.quantri')
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h1>Quản lý hóa đơn bán</h1>

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
                                <th>Mã hóa đơn </th>
                                <th>Sản phẩm </th>
                                <th>Số lượng </th>
                                <th>Đơn giá </th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                            <tr>
                                
                                    
                              
                                <td>{{$item->id_cthd}}</td>
                                <td>{{$item->id_hd}}</td>
                                <td>{{$item->tensp}}</td>
                                <td>{{$item->soluong}}</td>
                                <td>{{$item->giaban}}</td>



                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>


            </div>
        </div>

    </div>


@endsection
