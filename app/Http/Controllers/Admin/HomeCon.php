<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeCon extends Controller
{
    public function getHome(){
        return view('admin.quantri');
    }
    public function getLogout(){
        Auth::logout();
        return redirect('login');
    }
}
