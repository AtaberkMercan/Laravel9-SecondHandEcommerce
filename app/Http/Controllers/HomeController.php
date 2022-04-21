<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use mysql_xdevapi\BaseResult;

class HomeController extends Controller
{
    public function index(){
        $sliderdata=Product::limit(2)->get();
        $productlist1=Product::limit(6)->get();
        return view('Home.index',['sliderdata'=>$sliderdata,'productlist1'=>$productlist1]);
    }

    public function test(){
        return view('home.post');
    }

}
