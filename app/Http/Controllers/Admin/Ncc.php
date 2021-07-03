<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NccModel;
use App\http\Requests\AddNcc;
class Ncc extends Controller
{
    public function get(){
        $data['list']=NccModel::all();
        return view('admin.dmncc',$data);
    }
    public function getAdd(){
        return view('admin.themncc');
    }
    public function postAdd(AddNcc $request){
        $data = new NccModel;
        $data->tenncc=$request->ten;
        $data->save();
        return redirect('admin/ncc');

    }
    public function getEdit($id){
        $data['list'] = NccModel::find($id);
        return view('admin.suancc',$data);

    }
    public function postEdit(Request $request,$id){
        $data = NccModel::find($id);
        $data->tenncc=$request->ten;
        $data->save();
        return redirect('admin/ncc');
        
    }
    public function delete($id){
        NccModel::destroy($id);
        return redirect('admin/ncc');
        
    }
}
