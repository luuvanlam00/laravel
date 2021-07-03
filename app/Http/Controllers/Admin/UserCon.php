<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCon extends Controller
{
    public function getLogin()
    {
        return view('admin.index');
    }
    public function postLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password, 'vaitro' => 'admin'])) {
            return redirect('admin');
        }else {
            return back()->withInput()->with('error', 'Tài khoản hoặc mất khẩu sai!');
        }

        if (Auth::attempt(['email' => $email, 'password' => $password, 'vaitro' => 'user'])) {
            return redirect('');
        } else {
            return back()->withInput()->with('error', 'Tài khoản hoặc mất khẩu sai!');
        }
    }
}
