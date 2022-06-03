<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\BaseResult;
use PhpParser\Node\Expr\New_;

class HomeController extends Controller
{
    public function index(){
        $page='home';
        $sliderdata=Product::limit(4)->get();
        $productlist1 = Product::inRandomOrder()->limit(8)->get();
        $productlist2= Product::orderByDesc('created_at')->skip(0)->take(4)->get();
        $setting=Setting::first();
        return view('home.index',['page'=>$page,'sliderdata'=>$sliderdata,'productlist1'=>$productlist1,'setting'=>$setting,'productlist2'=>$productlist2]);
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
        return redirect()->route('contact',[])->with('info','Your Message Has Been Sent,Thanks.');
    }
    public function storecomment(Request $request){
        $data=New Comment();
        $data->user_id=Auth::id();
        $data->product_id=$request->input('product_id');
        $data->subject=$request->input('subject');
        $data->review=$request->input('review');
        $data->rate=$request->input('rate');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('product',['id'=>$request->input('product_id')])->with('info','Your Comment Has Been Sent,Thanks.');
    }
    public function product($id){
        $setting=Setting::first();
        $data=Product::find($id);
        $images=DB::table('images')->where('product_id',$id)->get();
        $reviews=Comment::where('product_id',$id)->where('status','True')->get();
        $productlist1=Product::limit(5)->get();
        return view('home.product',['data'=>$data,'productlist1'=>$productlist1,'images'=>$images,'setting'=>$setting,'reviews'=>$reviews]);
    }
    public function categoryproducts($id){
        $category=Category::find($id);
        $setting=Setting::first();
        $products=DB::table('products')->where('category_id',$id)->get();
        return view('home.categoryproducts',['category'=>$category,'products'=>$products,'setting'=>$setting]);
    }
    public static function maincategorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('home');
    }
    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
