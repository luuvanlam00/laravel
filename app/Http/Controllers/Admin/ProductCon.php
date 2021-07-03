<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cate;
use App\Models\NccModel;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class ProductCon extends Controller
{
    public function get(){
        $data['list'] = DB::table('sanpham')->join('loaisp','loaisp.maloai','=','sanpham.maloai')->join('ncc','ncc.mancc','=','sanpham.mancc')->orderByDesc('masp')->paginate(5);
        return view('admin.sanpham',$data);
    }
    public function getAdd(){
        $data['dm']=Cate::all();
        $data['ncc']=NccModel::all();
        return view('admin.themsp',$data);
    }
    public function getEdit($id){
        $data['list']=Product::find($id);
        $data['dm']=Cate::all();
        $data['ncc']=NccModel::all();
        return view('admin.suasp',$data);
    }
    public function postAdd(ProductRequest $request){
        $data= new Product;
        
        if($request->hasFile('anh')){
            $file=$request->file('anh');
            $data->anh=$file->getClientOriginalName();
            $file->move('backend/anh',$file->getClientOriginalName());
            
        }
        $data->tensp=$request->ten;
        $data->mota=$request->mota;
        $data->chitiet=$request->chitiet;
        $data->giaban=$request->giaban;
        $data->giakm=$request->giakm;
        $data->maloai=$request->maloai;
        $data->mancc=$request->mancc;
        $data->save();
        return redirect('admin/product');

       
    }
    public function postEdit(Request $request,$id){
        $data=Product::find($id);
        if($request->hasFile('anh')){
            $file=$request->file('anh');
            $filename=$file->getClientOriginalName();
            $file->move('backend/anh',$filename);
           
           
        }
        else{
            $filename=$data->anh;
        }
        $data->tensp=$request->ten;
        $data->anh=$filename;
        $data->mota=$request->mota;
        $data->chitiet=$request->chitiet;
        $data->giaban=$request->giaban;
        $data->giakm=$request->giakm;
        $data->maloai=$request->maloai;
        $data->mancc=$request->mancc;
        $data->save();
        return redirect('admin/product');


    }
    public function delete($id){
        Product::destroy($id);
        return redirect('admin/product');

    }
}
