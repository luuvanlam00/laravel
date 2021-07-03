<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use App\Models\CThoadon;
use App\Models\Hoadon;
use Carbon\Carbon;
use App\Models\Khachhang;
use Illuminate\Support\Facades\DB;
class CartCon extends Controller
{
    public function getadd($id){
    $product = Product::find($id);
     \Cart::add(['id'=>$id, 'name' =>$product->tensp,'quantity'=>1,'price'=>$product->giakm,'attributes'=>array('img'=>$product->anh,'chitiet'=>$product->chitiet)]);
     return redirect('cart/show');

    }
    public function getshow(){
         $data['items']=\Cart::getContent();
         $data['total'] =\Cart::getTotal();
        return view('fontend.cart',$data);
       
    }
    public function getdelete($id){
      
            \Cart::remove($id);
        
        return back();
    }
    public function update(Request $request){
        \Cart::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
          ));
    }
    
    public function muahang(){
        $data['items']=\Cart::getContent();
        $data['total'] =\Cart::getTotal();
       return view('fontend.muahang',$data);
    }
    public function postmuahang(Request $request){
        $kh=new Khachhang();
        $kh->tenkh=$request->name;
        $kh->email=$request->email;
        $kh->sdt=$request->sdt;
        $kh->save();
        $data=new Hoadon();
        $data->thoigian=Carbon::now();
        $data->tenkh=$request->name;
        $data->diachi=$request->dc;
        $data->trangthai='Chưa xác nhận';
        $data->save();
        $id=$data->id_hd;
        $cart = \Cart::getContent();
        foreach($cart as $item){
            $ct =new CThoadon();
            $ct->id_hd=$id;
            $ct->masp=$item->id;
            $ct->giaban=$item->price;
            $ct->soluong=$item->quantity;
            $ct->save();
        }
        
        \Cart::clear();

        return redirect('hoanthanh');
    }
    public function hoanthanh(){
        return view('fontend.hoanthanh');
    }
}
