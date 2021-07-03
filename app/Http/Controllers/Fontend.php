<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Comment;
use App\Models\Cate;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Fontend extends Controller
{
    public function getHome(){
        $data['list']= DB::table('sanpham')->take(4)->get();
        $data['new']=DB::table('sanpham')->orderByDesc('masp')->take(4)->get();
        return view('fontend.home',$data);
    }
    public function detail($id){
        $data['product']= Product::find($id);
        $data['cmt']=Comment::where('masp',$id)->get();
        $data['nb']= DB::table('sanpham')->take(6)->get();
        return view('fontend.details',$data);
    }
    public function postCom(Request $request,$id){
        $data=new Comment;
        $data->ten=$request->ten;
        $data->masp=$id;
        $data->noidung=$request->binhluan;
        $data->ngay=Carbon::now();
        $data->save();
        return back();
    }
    public function getPro(){
            $data['product'] = DB::table('sanpham')->paginate(9);
            $data['cate']=Cate::all();
            return view("fontend.product",$data);
    }
    public function getS($id){
        $data['list'] = Product::where('maloai',$id)->get();
        return view('fontend.category',$data);
    }
    public function search(Request $request){
        $data1=$request->search;
        $data1=str_replace(' ','%',$data1);
        $data['list']=Product::where('tensp','like','%'.$data1.'%')->get();
        return view('fontend.productsearch',$data);

    }
    public function searchprice($ma){
        if($ma==1){
            $data['list']=DB::table('sanpham')->orderByRaw('giakm')->paginate(9);
            return view('fontend.productprice',$data);
        }
        if($ma==2){
            $data['list']=DB::table('sanpham')->orderByDesc('giakm')->paginate(9);
            return view('fontend.productprice',$data);
        }
        if($ma==3){
            $data['list']=DB::table('sanpham')->where('giakm','<','5000000')->orderByRaw('giakm')->paginate(9);
            return view('fontend.productprice',$data);
        }
        if($ma==4){
            $data['list']=DB::table('sanpham')->where('giakm','>','5000000')->where('giakm','<','10000000')->orderByRaw('giakm')->paginate(9);
            return view('fontend.productprice',$data);
        }
        if($ma==5){
            $data['list']=DB::table('sanpham')->where('giakm','>','10000000')->where('giakm','<','20000000')->orderByRaw('giakm')->paginate(9);
            return view('fontend.productprice',$data);
        }
        if($ma==6){
            $data['list']=DB::table('sanpham')->where('giakm','>','20000000')->orderByRaw('giakm')->paginate(9);
            return view('fontend.productprice',$data);
        }
    }
}
