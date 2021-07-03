<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hoadon;
use App\Models\CThoadon;
use Illuminate\Support\Facades\DB;
class HD extends Controller
{
    public function get(){
        $data['list']=DB::table('hoadon')->orderByDesc('id_hd')->paginate(10);
        return view('admin.hd',$data);

    }
    public function getEdit($id){
        $data['list']=Hoadon::find($id);
        return view('admin.suahd',$data);

    }
    public function postEdit(Request $request,$id)
    {
        $data= Hoadon::find($id);
        $data->thoigian=$request->ngay;
        $data->tenkh=$request->ten;
        $data->diachi=$request->dc;
        $data->trangthai=$request->tt;
        $data->save();
        return redirect('admin/hoadon');
    }
    public function delete($id){
       Hoadon::destroy($id);
       return redirect('admin/hoadon');

    }
    public function chitiet($id){
        $data['list']=DB::select('select * from cthd c join sanpham s on s.masp=c.masp where id_hd = ?', [$id]);
        return view('admin.cthd',$data);

    }
}
