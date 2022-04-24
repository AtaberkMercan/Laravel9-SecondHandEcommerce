<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\BaseResult;

class HomeController extends Controller
{
    public function index(){
        $sliderdata=Product::limit(4)->get();
        $productlist1=Product::limit(6)->get();
        return view('home.index',['sliderdata'=>$sliderdata,'productlist1'=>$productlist1]);
    }

    public function product($id){
        $data=Product::find($id);
        $images=DB::table('images')->where('product_id',$id)->get();
        $productlist1=Product::limit(5)->get();
        return view('home.product',['data'=>$data,'productlist1'=>$productlist1,'images'=>$images]);
    }

}
