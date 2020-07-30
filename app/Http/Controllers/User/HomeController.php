<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //ホーム画面のデザインの表示
    public function getHome(){
        return view('user.home.home');
    }
    //ロゴを押したらホーム画面へリダイレクト
    public function getCategory(){
        return view('user/home/home');
    }
}
