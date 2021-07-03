<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cate;
use App\Http\Requests\AddCatw;

class CategoryCon extends Controller
{
    public function getCa(){
        $data['list']=Cate::all();
        return view('admin.dmsp',$data);
    }
    public function getAdd(){
        return view('admin.themdm');
    }
    public function postAdd(AddCatw $request){
        $data = new Cate;
        $data->tenloai=$request->ten;
        $data->save();
        return redirect('admin/category');

    }
    public function getEdit($id){
        $data['list'] = Cate::find($id);
        return view('admin.suadm',$data);

    }
    public function postEdit(Request $request,$id){
        $data = Cate::find($id);
        $data->tenloai=$request->ten;
        $data->save();
        return redirect('admin/category');
        
    }
    public function delete($id){
        Cate::destroy($id);
        return redirect('admin/category');
        
    }
}

