<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Khachhang;
use Illuminate\Support\Facades\DB;
class khach extends Controller
{
    public function get(){
        $data['list']=DB::table('khachhang')->orderByDesc('id_kh')->paginate(10);
        return view('admin.khachhang',$data);
    }
    public function getAdd()
    {   
        return view('admin.themkh');
        
    }
    public function postAdd(Request $request)
    {
        $data= new Khachhang();
        $data->tenkh=$request->ten;
        $data->email=$request->email;
        $data->sdt=$request->sdt;
        $data->save();
        return redirect('admin/khachhang');
    }
    public function getEdit($id){
        $data['list']= Khachhang::find($id);
        return view('admin.suakh',$data);
    }
    public function postEdit(Request $request,$id)
    {
        $data= Khachhang::find($id);
        $data->tenkh=$request->ten;
        $data->email=$request->email;
        $data->sdt=$request->sdt;
        $data->save();
        return redirect('admin/khachhang');
    }
    public function delete($id){
        Khachhang::destroy($id);
        return redirect('admin/khachhang');
    }

}
