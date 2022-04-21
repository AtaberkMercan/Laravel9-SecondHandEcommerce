<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use mysql_xdevapi\BaseResult;

class HomeController extends Controller
{
    public function index(){
        $sliderdata=Product::limit(2)->get();
        $datalist1=Product::limit(6)->get();
        return view('Home.index',['sliderdata'=>$sliderdata]);
    }

    public function test(){
        return view('home.post');
    }

}
