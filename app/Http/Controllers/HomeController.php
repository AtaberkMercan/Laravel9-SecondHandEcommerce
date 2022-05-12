<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\BaseResult;

class HomeController extends Controller
{
    public function index(){
        $page='home';
        $sliderdata=Product::limit(4)->get();
        $productlist1=Product::limit(6)->get();
        $setting=Setting::first();
        return view('home.index',['page'=>$page,'sliderdata'=>$sliderdata,'productlist1'=>$productlist1,'setting'=>$setting]);
    }
    public function about(){
        $setting=Setting::first();
        return view('home.about',['setting'=>$setting]);
    }
    public function contact(){
        $setting=Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function references(){
        $setting=Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function faq(){
        $setting=Setting::first();
        $datalist=Faq::all();
        return view('home.faq',['datalist'=>$datalist,'setting'=>$setting]);
    }

    public function storemessage(Request $request){
        $data=new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('contact')->with('info','Your Message Has Been Sent,Thanks.');
    }

    public function product($id){
        $setting=Setting::first();
        $data=Product::find($id);
        $images=DB::table('images')->where('product_id',$id)->get();
        $productlist1=Product::limit(5)->get();
        return view('home.product',['data'=>$data,'productlist1'=>$productlist1,'images'=>$images,'setting'=>$setting]);
    }
    public function categoryproducts($id){
        $category=Category::find($id);
        $products=DB::table('products')->where('category_id',$id)->get();
        return view('home.categoryproducts',['category'=>$category,'products'=>$products]);
    }
    public static function maincategorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

}
