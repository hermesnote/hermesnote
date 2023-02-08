<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     return $this->middleware('auth')->except('index');
    // }

    public function index()
    {
        return view('home.index');
    }
}

    // line 9-12 :
    // 經過auth認證的使用者可以查看HomeController的任何內容除了index
    // 這裡可以使用except(除了) 或 only(僅有)為HomeController做存取限制
    // auth本身已存在kernel.php註冊可直接任意調用
    // middleware也可以調用middleware([Authenticate::class, IsAdmin::class])
    // 調用其它類別需增修最上方namespace引用
