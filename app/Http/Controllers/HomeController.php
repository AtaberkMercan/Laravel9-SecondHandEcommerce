<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysql_xdevapi\BaseResult;

class HomeController extends Controller
{
    public function index(){
        return view('Home.index');
    }

    public function test(){
        return view('home.post');
    }

}
