<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class Binhluan extends Controller
{
    public function get(){
        $data['list'] = DB::table('binhluan')->orderByDesc('id_bl')->paginate(5);
        return view('admin.binhluan',$data);
    }
    public function getEdit($id){
        $data['list']= Comment::find($id);
        return view('admin.suabl',$data);
    }
    public function postEdit(Request $request, $id){
        $data = Comment::find($id);
        $data->ten=$request->ten;
        $data->noidung=$request->nd;
        $data->ngay=$request->date;
        $data->save();
        return redirect('admin/binhluan');
    }
    public function delete($id){
        Comment::destroy($id);
        return redirect('admin/binhluan');
}
}
